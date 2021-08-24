<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contact(Request $request)
    {
         $this->validate($request,[
             'name'=> 'required',
              'email'=> 'required',
              'subject'=> 'required',
              'Message'=> 'required',            
         ]);
    
         $contact = new Contact;
         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->subject = $request->subject;
         $contact->message = $request->message;
         $contact->save();
         return redirect('/welcome');
    }
}
