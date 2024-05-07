<?php

namespace App\Helpers;

use App\Helpers\Enums\ApplicationStatusEnum;
use Illuminate\Http\Request;
use App\Models\BoAccount\Application;
use App\Models\BoAccount\Applicant;
use App\Models\BoAccount\BankInfo;

use App\Helpers\ImageUploadHelper;
use App\Mail\ReferenceNumberMail;
use App\Models\BoAccount\Nominee;
use Illuminate\Support\Facades\Mail;

class BoAccountHelper
{
    protected $imageHelper;

    public function __construct(ImageUploadHelper $imageHelper)
    {
        $this->imageHelper = $imageHelper;
    }

    public function create_or_update_application($request)
    {
        $id = !empty($request->application_id) ? $request->application_id : false ;

        $application = $id ? Application::find($id) : new Application;

        $code = generateRandomString(8);

        if(!$id){
            $application->reference_no = $code;
        }
        
        $application->mobile_no = $request->mobile_no;
        $application->email = $request->email;
        $application->bo_type = $request->bo_type;
        $application->bo_option = $request->bo_option;
        $application->residency = $request->residency;

        if(!$id){
            $application->stage = $request->stage;
            $application->save();

            Mail::to($request->email)->send(new ReferenceNumberMail($code));
        }else{
            $application->update();
        }

        return $application;
    }

    public function create_or_update_applicant($request)
    {
        $application = Application::with('first_applicant')->with('joint_applicant')->find($request->application_id);

        if($application->bo_type == 'individual'){
            if(!$application->first_applicant){
                $applicant = new Applicant;
            }else{
                $applicant = Applicant::find($application->first_applicant->id);
            }
        }elseif($application->bo_type == 'joint'){
            if($request->applicant_counter == 1){
                if(!$application->first_applicant){
                    $applicant = new Applicant;
                }else{
                    $applicant = Applicant::find($application->first_applicant->id);
                }
            }elseif($request->applicant_counter == 2){
                if(!$application->joint_applicant){
                    $applicant = new Applicant;
                    $applicant->is_joint = true;
                }else{
                    $applicant = Applicant::find($application->joint_applicant->id);
                }
            }
        }
        
        $applicant->application_id = $application->id;
        $applicant->full_name = $request->full_name;
        $applicant->father_name = $request->father_name;
        $applicant->mother_name = $request->mother_name;
        $applicant->spouse_name = $request->spouse_name;
        $applicant->dob = date('Y-m-d', strtotime($request->dob));
        $applicant->gender = $request->gender;
        $applicant->occupation = $request->occupation;
        $applicant->tin = $request->tin;
        $applicant->nid = $request->nid;
        $applicant->citizen_of_bangladesh = !empty($request->citizen_of_bangladesh) && $request->citizen_of_bangladesh == 'yes' ? true : false ;
        $applicant->present_country = $request->present_country;
        $applicant->present_city = $request->present_city;
        $applicant->present_state = $request->present_state;
        $applicant->present_post_code = $request->present_post_code;
        $applicant->present_address = $request->present_address;
        $applicant->permanent_country = $request->permanent_country;
        $applicant->permanent_city = $request->permanent_city;
        $applicant->permanent_state = $request->permanent_state;
        $applicant->permanent_post_code = $request->permanent_post_code;
        $applicant->permanent_address = $request->permanent_address;
        $applicant->passport_no = $request->passport_no;
        $applicant->passport_issue_place = $request->passport_issue_place;
        $applicant->passport_issue_date = !empty($request->passport_issue_date) ? date('Y-m-d', strtotime($request->passport_issue_date)) : null;
        $applicant->passport_expiry_date = !empty($request->passport_expiry_date) ? date('Y-m-d', strtotime($request->passport_expiry_date)) : null;

        if ($request->hasFile('signature')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->signature, 'signature-'.$applicant->id, $applicant->signature);
            $applicant->signature = $imageName;
        }

        if ($request->hasFile('photo')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->photo, 'photo-'.$applicant->id, $applicant->photo);
            $applicant->photo = $imageName;
        }

        if ($request->hasFile('nid_front_image')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->nid_front_image, 'nid-front-'.$applicant->id, $applicant->nid_front_image);
            $applicant->nid_front_image = $imageName;
        }

        if ($request->hasFile('nid_back_image')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->nid_back_image, 'nid-back-'.$applicant->id, $applicant->nid_back_image);
            $applicant->nid_back_image = $imageName;
        }

        $applicant->save();

        $application->stage = $request->stage;
        $application->update();

        return $application;
    }

    public function create_or_update_bank_info($request)
    {
        $application = Application::with('bank_info')->find($request->application_id);

        if(!$application->bank_info){
            $bank_info = new BankInfo;
            $bank_info->application_id = $request->application_id;
        }else{
            $bank_info = BankInfo::find($application->bank_info->id);
        }

        $bank_info->bank_name = $request->bank_name;
        $bank_info->branch_name = $request->branch_name;
        $bank_info->routing_no = $request->routing_no;
        $bank_info->account_no = $request->account_no;
        $bank_info->swift_code = $request->swift_code;

        if($request->hasFile('chequebook_image')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->chequebook_image, 'cheq-book-'.$bank_info->id, $bank_info->chequebook_image);
            $bank_info->chequebook_image = $imageName;
        }

        $bank_info->save();

        $application->stage = $request->stage;
        $application->update();

        return $application;
    }

    
    public function create_or_update_nominee($request)
    {
        $application = Application::with('nominees')->find($request->application_id); 

        if($request->applicant_counter == 2){
            
            if(!$application->second_nominee){
                $nominee_info = new Nominee;  
                $nominee_info->application_id = $request->application_id;
            }else{
                $nominee_info = Nominee::find($application->second_nominee->id);
            }
        }else{

            if(!$application->first_nominee){
                $nominee_info = new Nominee; 
                $nominee_info->application_id = $request->application_id;
            }else{
                $nominee_info = Nominee::find($application->first_nominee->id);
            }
        }
 
        $nominee_info->full_name = $request->full_name;
        $nominee_info->passport_no = $request->passport_no;
        $nominee_info->present_country = $request->present_country;
        $nominee_info->mobile_no = $request->mobile_no;
        $nominee_info->present_city = $request->present_city; 
        $nominee_info->dob = $request->dob;
        $nominee_info->present_post_code = $request->present_post_code;
        $nominee_info->percentage = $request->percentage;
        $nominee_info->present_state = $request->present_state;
        $nominee_info->relation = $request->relation; 
        $nominee_info->present_address = $request->present_address;
        $nominee_info->gender = $request->gender; 

        if ($request->hasFile('nid_front_image')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->nid_front_image, 'nid-front-'.$nominee_info->id, $nominee_info->nid_front_image);
            $nominee_info->nid_front_image = $imageName;
        }

        if ($request->hasFile('nid_back_image')) {
            $imageName = $this->imageHelper->uploadImage('applicant-images', $request->nid_back_image, 'nid-back-'.$nominee_info->id, $nominee_info->nid_back_image);
            $nominee_info->nid_back_image = $imageName;
        }


        $nominee_info->save();

        $application->stage = $request->stage;
        $application->update();

        return $application;
    }

    
    public function complete_confirmation($request)
    {
        $application = Application::find($request->application_id);  
        if ($request->has('acceptance')) {
            $application->stage = $request->stage;
            $application->status = ApplicationStatusEnum::COMPLETED;
            $application->update();
        }

        return $application;
    }

}