<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ContactController extends Controller
{
    //
    public function Contact(){
        return view('frontend.contact');
    }

    public function storemessage(Request $request){
        Contact::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
          ]);
    
     
        return redirect()->route('contact.me');

    }

    public function Contactmessages(){
        $contact = Contact::latest()->get();
        return view('admin.contact', compact('contact'));
    }
}
