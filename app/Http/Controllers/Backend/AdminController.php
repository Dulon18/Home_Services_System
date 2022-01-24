<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Order;
use App\Models\Service;
use App\Models\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function  dashboard(){

        $count['service']=Service::all()->count();
        $count['order']=Order::all()->count();
        $count['user']=User::all()->count();
        $count['sp']=Service_provider::all()->count();

     return view('admin.pages.dashboard.AD_dashboard',compact('count'));
    }

    public function login()
    {
      return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $userInfo=$request->except('_token');

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin.dashboard')->with('message','Login successfully.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }

  
}
