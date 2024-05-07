<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\BoAccount\Application;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    protected $imageHelper;

    public function __construct(ImageUploadHelper $imageHelper)
    {
        $this->imageHelper = $imageHelper;
    }

    public function dashboard()
    {
        $applications = Application::with('first_applicant')->orderBy('created_at','DESC')->paginate(10);
         return view('dashboard.dashboard', compact('applications'));
    }

    public function app_info()
    {
        $app_info =  appInfo();

        $info = [];

        foreach ($app_info as $key => $value) {
            $info[] = [
                $key => gettype($value)
            ];
        }

        return $info;

        // return $app_info;
        
        // $jsonContents = file_get_contents($jsonFilePath);
        // $data = json_decode($jsonContents, true); // Set the second parameter to true for an associative array, or false for an object

        // Step 2: Modify the data
        // $data['name'] = 'John Doe'; // For example, update the 'name' field

        // // Step 3: Encode the updated data back to JSON
        // $updatedJsonData = json_encode($data, JSON_PRETTY_PRINT);

        // // Step 4: Save the updated JSON data back to the file
        // file_put_contents($jsonFilePath, $updatedJsonData);

        $editRow = '';

        return view('dashboard.app-info', compact('app_info','editRow'));
    }

    public function popupEdit() {
        $editRow =  popupInfo();
        return view('dashboard.settings.popup', compact('editRow'));
    }

    public function popupUpdate(Request $request)
    {
        $expire_date = $request->input('expire_date');

        $this->validate($request, [
            'title' => [
                Rule::requiredIf(function () use ($request) {
                    return is_null($request->hasFile('image')) && is_null($request->id);
                }),
                'nullable',
                'string',
                'max:255',
            ],
            'description' => [
                Rule::requiredIf(function () use ($request) {
                    return is_null($request->hasFile('image')) && is_null($request->id);
                }),
                'nullable',
                'string',
                'max:255',
            ],
            'image' => [
                Rule::requiredIf(function () use ($request) {
                    return is_null($request->title && is_null($request->id));
                }),
                'nullable',
            ],
            'expire_date' => [ 
                Rule::requiredIf(function () use ($request) {
                    return  is_null($request->id);
                }),
                'nullable', 
                'string'
            ],
            "external_link" => ['nullable', 'string', 'max:255'], 
        ]);
        if($request->input('id') == 'delete' ){
            $expire_date = "1923-11-30";
        }

        $now = now()->format('Y-m-d');
        if (!$expire_date || $now > $expire_date) {
            $is_active = false;
        }else{
            $is_active = true;
        }

        $popupData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'expire_date' => $expire_date,
            'external_link' => $request->input('external_link'), 
            'is_active' =>  $is_active
        ];
        
        $existing_data = popupInfo();

        if($request->delete_image){
            $this->imageHelper->deleteImage('popup-images',$existing_data['image']);
            $popupData['image'] = null;
        }

        if ($request->hasFile('image')) {
            $imageName = $this->imageHelper->uploadImage('popup-images', $request->image, time().rand(10,1000), $request->image);
            $popupData['image'] = $imageName;
        }else{
            $popupData['image'] = null;
            if(!$request->delete_image && !$request->title){
                $popupData['image'] = $existing_data['image'];
            }
        }

        file_put_contents(config_path('popup.json'), json_encode($popupData, JSON_PRETTY_PRINT));
        if(!$request->id){ 
            return redirect()->route('popup.edit')->with('messege_success', 'Popup updated successfully');
        }
    }
}
