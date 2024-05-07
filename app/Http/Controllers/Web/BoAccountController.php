<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoAccount\Application;
use App\Helpers\BoAccountHelper; 
use Barryvdh\DomPDF\Facade\Pdf;

class BoAccountController extends Controller
{
    protected $boAccountHelper;

    public function __construct(BoAccountHelper $boAccountHelper)
    {
        $this->boAccountHelper = $boAccountHelper;
    }

    public function open_bo_account($slug)
    {
        $application = '';
        return view('web.bo-form.'.$slug.'-form', compact('application'));
    }

    public function search_by_mobile(Request $request)
    {
        $this->validate($request, [
           'reference_no' => ['required', 'string', 'max:11', 'min:11']
        ]);

        $application = Application::where('mobile_no', $request->reference_no)->first();

        if(!$application){
            return back()->with('message_danger', 'No data found with the provided reference mobile number!');
        }else{
            return redirect()->route('re-open-bo-account',['slug' => 'intro', 'code' =>  $application->reference_no])->with('message_success', 'Data found successfully!');
        }
    }

    
    public function search_by_reference(Request $request)
    {
        $this->validate($request, [
           'reference_no' => ['required', 'string' ]
        ]);

        $application = Application::where('reference_no', $request->reference_no)->first();

        if(!$application){
            return back()->with('message_danger', 'No data found with the provided reference number!');
        }else{
            return redirect()->route('re-open-bo-account',['slug' => 'intro', 'code' =>  $application->reference_no])->with('message_success', 'Data found successfully!');
        }
    }

    public function re_open_bo_account(Request $request, $slug, $code)
    {
        $application = Application::where('reference_no', $code)->first();
        $applicant = '';
        $nominee = '';

        $applicant_counter = !empty($request->counter) ? $request->counter : 0;

        if($slug == 'basic'){
            if($application->bo_type == 'joint' && $request->counter == 2){
                $applicant = Application::with(['joint_applicant'])->where('reference_no', $code)->first()->joint_applicant;                
            }else{
                $applicant = Application::with(['first_applicant'])->where('reference_no', $code)->first()->first_applicant;
            }
        }

        if($slug == 'bank'){
            $application = Application::with('bank_info')->where('reference_no', $code)->first();
        }

        
        if($slug == 'nominee'){
            if(  $request->counter == 2){
                $nominee = Application::with('second_nominee')->where('reference_no', $code)->first()->second_nominee;
            }else{
                $nominee = Application::with('first_nominee')->where('reference_no', $code)->first()->first_nominee;
            }
         }
         
        return view('web.bo-form.'.$slug.'-form', compact('application','slug', 'applicant_counter', 'applicant','nominee'));
    }

    public function submit_bo_form(Request $request)
    {
        if($request->stage == 'intro'){
            if(!empty($request->application_id)){
                $this->validate($request,[
                    'mobile_no' => ['required', 'string', 'max:11', 'min:11', 'unique:applications,mobile_no,'.$request->application_id],
                    'email' => ['required', 'string', 'unique:applications,email,'.$request->application_id],
                    'bo_type' => ['required'],
                    'bo_option' => ['required'],
                    'residency' => ['required'],
                ]);
            }else{
                $this->validate($request,[
                    'mobile_no' => ['required', 'string', 'max:11', 'min:11', 'unique:applications'],
                    'email' => ['required', 'string', 'unique:applications'],
                    'bo_type' => ['required'],
                    'bo_option' => ['required'],
                    'residency' => ['required'],
                ]);            
            }

            $application = $this->boAccountHelper->create_or_update_application($request);

            if($application->bo_type == 'joint'){
                return redirect()->route('re-open-bo-account',['slug' => 'basic', 'code' =>  $application->reference_no, 'counter' => 1])->with('application', $application);
            }else{
                return redirect()->route('re-open-bo-account',['slug' => 'basic', 'code' =>  $application->reference_no])->with('application', $application);
            }
        }

        if($request->stage == 'basic'){
            if(!empty($request->application_id)){
                $this->validate($request,[
                    'full_name' => ['required', 'string'],
                    'father_name' => ['required', 'string'],
                    'mother_name' => ['required', 'string'],
                    // 'spouse_name' => ['nullable', 'string'],
                    'dob' => ['required', 'date'],
                    'gender' => ['required', 'string'],
                    // 'occupation' => ['nullable'],
                    // 'tin' => ['nullable'],
                    // 'citizen_of_bangladesh' => ['nullable'],
                    'present_country' => ['required'],
                    'present_city' => ['required'],
                    'present_state' => ['required'],
                    'present_post_code' => ['required'],
                    'present_address' => ['required'],
                    'permanent_country' => ['required'],
                    'permanent_city' => ['required'],
                    'permanent_state' => ['required'],
                    'permanent_post_code' => ['required'],
                    'permanent_address' => ['required'],
                    'photo' => ['mimes:jpg,jpeg,png', 'max:5210'],
                    'signature' => ['mimes:jpg,jpeg,png', 'max:5210'],
                    'passport_no' => ['nullable','unique:applicants,passport_no'],
                    // 'passport_issue_place' => ['nullable'],
                    // 'passport_issue_date' => ['nullable'],
                    // 'passport_expiry_date' => ['nullable'],
                    // 'nid' => ['nullable'],
                    // 'nid_front_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                    // 'nid_back_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                    
                ]);
            }else{
                $this->validate($request,[
                    'full_name' => ['required', 'string'],
                    'father_name' => ['required', 'string'],
                    'mother_name' => ['required', 'string'],
                    // 'spouse_name' => ['nullable', 'string'],
                    'dob' => ['required', 'date'],
                    'gender' => ['required', 'string'],
                    // 'occupation' => ['nullable'],
                    // 'tin' => ['nullable'],
                    // 'citizen_of_bangladesh' => ['nullable'],
                    'present_country' => ['required'],
                    'present_city' => ['required'],
                    'present_state' => ['required'],
                    'present_post_code' => ['required'],
                    'present_address' => ['required'],
                    'permanent_country' => ['required'],
                    'permanent_city' => ['required'],
                    'permanent_state' => ['required'],
                    'permanent_post_code' => ['required'],
                    'permanent_address' => ['required'],
                    'photo' => ['mimes:jpg,jpeg,png', 'max:5210'],
                    'signature' => ['mimes:jpg,jpeg,png', 'max:5210'],
                    'passport_no' => ['nullable','unique:applicants,passport_no,'.$request->application_id],
                    // 'passport_issue_place' => ['nullable'],
                    // 'passport_issue_date' => ['nullable'],
                    // 'passport_expiry_date' => ['nullable'],
                    // 'nid' => ['nullable'],
                    // 'nid_front_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                    // 'nid_back_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                    
                ]);
            }

            $application = $this->boAccountHelper->create_or_update_applicant($request);

            if($application->bo_type == 'joint' && $request->applicant_counter == 1){
                return redirect()->route('re-open-bo-account',['slug' => 'basic', 'code' =>  $application->reference_no, 'counter' => 2]);
            }

            return redirect()->route('re-open-bo-account',['slug' => 'bank', 'code' =>  $application->reference_no]);
        }

        if($request->stage == 'bank'){

            $this->validate($request,[
                'bank_name' => ['required', 'string'],
                'branch_name' => ['required', 'string'],
                'routing_no' => ['required', 'string'],
                'account_no' => ['required', 'string'],
                'swift_code' => ['required', 'string'],
                'chequebook_image' => ['mimes:jpg,jpeg,png', 'max:5210'],
            ]);

            $application = $this->boAccountHelper->create_or_update_bank_info($request);

            return redirect()->route('re-open-bo-account',['slug' => 'nominee', 'code' =>  $application->reference_no]);
        }

        if($request->stage == 'nominee'){

            $this->validate($request,[
                'full_name' => ['required', 'string'], 
                'present_country' => ['required'],
                'mobile_no' => ['required', 'string', 'max:11', 'min:11'],
                'present_city' => ['required'],
                'dob' => ['required', 'date'],
                'present_post_code' => ['required'],
                'percentage' => ['required'],
                'present_state' => ['required'],
                'relation' => ['required', 'string'],
                'present_address' => ['required'],
                'gender' => ['required', 'string'],   
                'nid_front_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                'nid_back_image' => ['nullable', 'mimes:jpg,jpeg,png', 'max:5210'],
                // 'photo' => ['mimes:jpg,jpeg,png', 'max:5210'],
                // 'signature' => ['mimes:jpg,jpeg,png', 'max:5210'], 
                
            ]);

            $application = $this->boAccountHelper->create_or_update_nominee($request);

            if ($request->input('nominee') == 'second_nominee') {
                return redirect()->route('re-open-bo-account',['slug' => 'nominee', 'code' =>  $application->reference_no, 'counter' => 2]);
            }
            
            return redirect()->route('re-open-bo-account',['slug' => 'complete', 'code' =>  $application->reference_no]);
        }

        
        if($request->stage == 'completed'){ 

            $application = $this->boAccountHelper->complete_confirmation($request);
 
            return redirect()->route( 'bo-form.client.view', $application);
        }
    }

    function view_bo_form(string $id)  {
        
        $application = Application::with('first_applicant', 'joint_applicant', 'bank_info', 'first_nominee', 'second_nominee')->find($id);
        
        $download_route = 'bo-form.client.download';
        return view('final-bo-form', compact('application', 'download_route'));
     }
 
     function download_bo_form($id)  {       
         $application = Application::with('first_applicant', 'joint_applicant', 'bank_info', 'first_nominee', 'second_nominee')->find($id);
         $pdfMode = true;
         $pdf = PDF::loadView('final-bo-form',  compact('application', 'pdfMode')); 
         return $pdf->download('final-bo-form.pdf');
     }
}
