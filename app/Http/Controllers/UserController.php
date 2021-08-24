<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
class UserController extends Controller
{
    public function sendMessage(Request $request)
    {
         $this->validate($request,[
             'name'=> 'required',
              'email'=> 'required',
            //   'subject'=> 'required',
              'Message'=> 'required',            
         ]);
    
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->subject = $request->subject;
         $user->message = $request->message;
         $user->save();
         return redirect('/welcome');
    }
}
