<?php

namespace App\Http\Controllers\Dashboard;


 use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\Enums\ApplicationStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\BoAccount\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Validation\Rule;  

class BoAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::with('first_applicant')->orderBy('created_at','DESC')->paginate(10);
        return view('dashboard.bo-account-forms.applications', compact('applications'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $application = Application::with('first_applicant', 'joint_applicant', 'bank_info', 'first_nominee', 'second_nominee')->find($id);
       return view('dashboard.bo-account-forms.application-show', compact('application'));

    }

    /**
     * Display the specified resource.
     */
    public function check_bo_form(Request $request)
    {

        $this->validate($request, [
            'application_id' => 'required',
            'result' => 'required|in:accept,reject,recheck',
            'note' => Rule::requiredIf($request->result == 'recheck'),
        ]);

        $application = Application::with('first_applicant')->find($request->application_id);  

        // if($request->result == 'reject'){
        //     $application->status = ApplicationStatusEnum::REJECTED;
        //     $application->note = $request->note;
        //     $application->update();
    
        //     return redirect()->route('application-center.index')->with('messege_success','Application has been rejected successfully!');
        // }
         
        if($request->result == 'recheck'){
            $application->status = ApplicationStatusEnum::RECHECK;
            $application->note = $request->note;
            $application->update();
    
            return redirect()->route('application-center.index')->with('messege_success','Application has been sent for recheck!');
        }

        // If result is accepted, create a new user
        $user_password = Str::random(8);
        $user_email = $application->email;

        $user = new User();
        $user->name = $application->first_applicant->full_name;  
        $user->mobile_no = $application->mobile_no;
        $user->email = $user_email;  
        $user->password = bcrypt($user_password);  
        $user->status = 1;  
        $user->save();

        $application->status = ApplicationStatusEnum::ACCEPTED;
        $application->update();

        Mail::to($application->email)->send(new WelcomeMail($user_email, $user_password));

        return redirect()->route('application-center.index')->with('messege_success','Application has been accepted successfully!');
    }

    function view_bo_form(string $id)  {
        
       $application = Application::with('first_applicant', 'joint_applicant', 'bank_info', 'first_nominee', 'second_nominee')->find($id);
       
       $download_route = 'bo-form.download';
       return view('final-bo-form', compact('application', 'download_route'));
    }

    function download_bo_form($id)  {       
        $application = Application::with('first_applicant', 'joint_applicant', 'bank_info', 'first_nominee', 'second_nominee')->find($id);
        $pdfMode = true;

        $pdf = PDF::loadView('final-bo-form',  compact('application', 'pdfMode')); 
        return $pdf->download('final-bo-form.pdf');
    }
 
}
