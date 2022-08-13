<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Booking_Detail;
use App\Models\Service;
use App\Models\Booking;
use App\Models\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function  dashboard(){

        // total count in dashboard
        $count['service']=Service::all()->count();
        $count['order']=Booking_Detail::all()->count();
        $count['user']=User::where('role','user')->get()->count();

        $totalprovider=User::where('role','sprovider')->get()->count();

        $totalComplateTask=Booking_Detail::where('status',2)->get()->count();
        $totalpandingTask=Booking_Detail::where('status',0)->get()->count();
        $totalcancelTask=Booking_Detail::where('status',3)->get()->count();
        $totalacceptTask=Booking_Detail::where('status',1)->get()->count();

        $today = DB::table('booking__details')->select(DB::raw('*'))->whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $yesterday = DB::table('booking__details')->select(DB::raw('*'))->whereRaw('Date(created_at) = SUBDATE(CURDATE(),1)')->get()->count();
        $lastWeek =  DB::table('booking__details')->select(DB::raw('*'))->whereRaw('SUBDATE(CURDATE(),7) AND SUBDATE(CURDATE(),1)')->get();


     
     
    return view('admin.pages.dashboard.AD_dashboard',compact('count',
     'totalComplateTask',
     'totalpandingTask',
     'totalcancelTask',
     'totalacceptTask',
     'totalprovider',
     'today',
     'yesterday',
     'lastWeek'
    ));
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
