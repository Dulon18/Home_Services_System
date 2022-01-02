<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\User;
use App\Models\Service_provider;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $services=Service::all();
        return view('frontend.pages.home',compact('services'));
    }

    public function category(){
        $categories=Categories::all();
        return view('frontend.pages.category',compact('categories'));
    }

    public function service_details()
    {   
        return view('frontend.pages.service_details',compact('booking'));
    }
    
    public function profile()
    {
        $profile=Service_provider::all();
        return view('frontend.pages.profile',compact('profile'));
    }

    public function userprofile()
    {
        //dd($uid);
        //  $userprofile=User::find($uid);
        //  return view('frontend.pages.userProfile',compact('userprofile'));
        return view('frontend.pages.userProfile');
    }
   
}
