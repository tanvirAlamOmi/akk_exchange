<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\DataContent\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    protected $imageHelper;

    public function __construct(ImageUploadHelper $imageHelper)
    {
        $this->imageHelper = $imageHelper;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Notice::orderBy('id','DESC')->paginate(10);
        return view('dashboard.notices.notices', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editRow = '';
        return view('dashboard.notices.notice-inputs', compact('editRow'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['nullable', 'string', 'max:255'],
            // 'image' => ['nullable', 'max:2048'], //image rules
            'description' => ['nullable', 'string'],
            'serial_no' => ['nullable', 'integer', 'min:0'],
            // 'status' => ['nullable', 'boolean'], // validate
        ]);

        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->serial_no = $request->serial_no; 
        $notice->status = $request->status ? true : false;

        if ($request->hasFile('image')) {
            $imageName = $this->imageHelper->uploadImage('notice-images', $request->image, time().rand(10,1000));
            $notice->image = $imageName;
        }

        $notice->save();

        return redirect()->route('notices.index')->with('messege_success','Notice has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $notice = Notice::find($id);
       return view('dashboard.notices.notice-show', compact('notice'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editRow = Notice::find($id);
        return view('dashboard.notices.notice-inputs', compact('editRow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => ['nullable', 'string', 'max:255'],
            // 'image' => ['nullable', 'max:2048'], //more image rules
            'description' => ['nullable', 'string'],
            'serial_no' => ['nullable', 'integer', 'min:0'],
            // 'status' => ['nullable', 'boolean'], // validate
        ]);

        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->serial_no = $request->serial_no; 
        $notice->status = $request->status ? true : false;
      
        if($request->delete_image){
            $this->imageHelper->deleteImage('notice-images',$notice->image);
            $notice->image = null;
        }

        if ($request->hasFile('image')) {
            $imageName = $this->imageHelper->uploadImage('notice-images', $request->image, time().rand(10,1000), $notice->image);
            $notice->image = $imageName;
        }

        $notice->update();

        return redirect()->route('notices.index')->with('messege_success','Notice has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::find($id);

        $notice->delete();

        return redirect()->route('notices.index')->with('messege_success','Notice has been deleted successfully!');
    }

    public function setActiveStatus(Request $request){
         $notice = Notice::find($request->id);

        // Change the status to active
        $notice->setActive();
    }

    public function setInactiveStatus(Request $request){
        $notice = Notice::find($request->id);

        // Change the status to inactive
        $notice->setInactive();
    }
}
