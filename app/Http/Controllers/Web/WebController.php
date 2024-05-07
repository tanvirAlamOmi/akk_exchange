<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings\Menu;
use App\Models\Settings\Page;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Helpers\PageHelper;
use App\Models\BoAccount\Application;
use App\Models\ContactMessage;
use App\Models\DataContent\Notice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    protected $pageHelper;

    public function __construct(PageHelper $pageHelper)
    {
        $this->pageHelper = $pageHelper;
    }

    public function page($slug)
    {
        $menu = Menu::where('slug',$slug)->first();
        
        if($menu){
            $page = Page::select('id','type','title','subtitle','image','meta_keywords','meta_description','status')->with(['menu','sections.article','sections.image_contents','sections.text_contents','sections.file_contents','sections.video_contents'])->where('menu_id',$menu->id)->first();;

            if(!$page || $page->type == 'static'){
                return $this->check_page($slug, $page);
            }else{
                return view('web.page', compact('slug','page'));
            }
        }else{
            return back()->with('message_danger','Sorry, your desired page is not exists!');
        }
    }

    protected function check_page($slug,$page = null)
    {
        if(view()->exists('web.'.$slug)){
            return view('web.'.$slug, compact('slug','page'));
        }else{
            $this->pageHelper->generateStaticPage($slug);
            return view('web.'.$slug, compact('slug','page'));
        }
    }

    public function home()
    {
        return $this->page('home');
    }

    public function about_us()
    {
        return view('web.about-us');
    }

    
    public function contact_message_store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'max:11', 'min:11'],
            'bo_id' => ['nullable', 'string'],
            'message' => ['required', 'string', 'max:700'],
        ]);

        
        $contact =  new ContactMessage();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone; 
        $contact->bo_id = $request->bo_id;
        $contact->message = $request->message;

        $contact->save();
 
        return redirect()->route('page','contact-us') ->with('messege_success','Message has been sent successfully!');
    }

    public function view_bo_account()
    { 
        $application = Application::where('mobile_no', Auth::user()->mobile_no)->first(); 

        return view('web.view-bo-account', compact('application'));
    }
    
    public function user_profile()
    {
        return view('web.profile');
    }

    public function profile_update(Request $request)
    { 
        $this->validate($request, [
            'name' => [ 'string', 'max:255'],
        //     'currentPassword' => ['required_with:newPassword'],
            'newPassword' => [' string', 'min:8', 'confirmed'], 
        ]);
 
        $user = $request->user();

        if ($request->filled('newPassword') && !Hash::check($request->currentPassword, $user->password)) { 
            return back()->with('error', 'Current password is incorrect.');
        }

        if ($request->filled('name')) {
            $user->update([
                'name' => $request->name,
            ]);
        }
 
        if ($request->filled('newPassword')) {
            $user->update([
                'password' => Hash::make($request->newPassword),
            ]);
        }
        return back()->with('success', 'Profile updated successfully.');
  
    }


    public function notice_show(string $id)  { 
        $notice = Notice::where('id', $id)->first();

        return view('web.notice', compact('notice'));
    }
}
