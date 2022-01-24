<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function getPassword($token) { 

        $categories=Categories::all();
        return view('frontend.pages.password.Password', ['token' => $token],compact('categories'));
     }
   
     public function updatePassword(Request $request)
     {
   
     $request->validate([
         'email' => 'required|email|exists:users',
         'password' => 'required|string|min:2|confirmed',
         'password_confirmation' =>'required',
   
     ]);
   
     $updatePassword = DB::table('password_resets')
                         ->where(['email' => $request->email, 'token' => $request->token])
                         ->first();
   
     if(!$updatePassword)
         return back()->withInput()->with('error', 'Invalid token!');
   
       $user = User::where('email', $request->email)
                   ->update(['password' =>Hash::make($request->password)]);
   
       DB::table('password_resets')->where(['email'=> $request->email])->delete();
   
       return redirect('customer/login')->with('success', 'Your password has been changed!');
   
     }
}
