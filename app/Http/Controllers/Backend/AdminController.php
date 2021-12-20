<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function  dashboard(){
     return view('admin.pages.dashboard.AD_dashboard');
    }

    public function login()
    {
      return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $userInfo=$request->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('home')->with('message','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }
}
