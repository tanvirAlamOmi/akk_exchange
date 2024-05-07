<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactMessage::orderBy('created_at','DESC')->paginate(10);
        return view('dashboard.contact-message.contact-message', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $contact = ContactMessage::find($id);
       return view('dashboard.contact-message.contact-message-show', compact('contact'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactMessage::find($id);

        $contact->delete();

        return redirect()->route('contact-messages.index')->with('messege_success','Message has been deleted successfully!');
    }

    public function setActiveStatus(Request $request){
         $contact = ContactMessage::find($request->id);

        // Change the status to active
        $contact->setActive();
    }

    public function setInactiveStatus(Request $request){
        $contact = ContactMessage::find($request->id);

        // Change the status to inactive
        $contact->setInactive();
    }
}
