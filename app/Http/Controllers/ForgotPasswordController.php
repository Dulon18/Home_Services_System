<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    //forgot passwoard
     
    public function forgotPass()
    {
       $categories=Categories::all();

       return view('frontend.pages.password.forgotPassword',compact('categories'));
   }

 
  public function postEmail(Request $request)
   {
     $request->validate([
         'email' => 'required|email|exists:users',
     ]);
 
     $token = Str::random(64);
 
       DB::table('password_resets')->insert(
           ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
       );
 
       Mail::send('frontend.pages.password.verify', ['token' => $token], function($message) use($request){
           $message->to($request->email);
           $message->subject('Reset Password Notification');
       });
 
       return back()->with('success', 'We have e-mailed your password reset link!');
   }
}
