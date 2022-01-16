<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\ApplianceService;
use App\Models\User;
use App\Models\Service_provider;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $key=null;
        if(request()->search){
            $key=request()->search;
            $services = Service::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->orWhere('price','LIKE','%'.$key.'%')
                ->get();
            return view('frontend.pages.searching',compact('services','key'));
        }

        $services=Service::all();
        $categories=Categories::all();
        $applianc_services = ApplianceService::all();

        return view('frontend.pages.home',compact('services','applianc_services','categories'));
    }

    public function services($id)
    {
        $categories=Categories::all();
        $service=Service::where('category_id',$id)->get();
     //   dd($service);
       return view('frontend.pages.service',compact('service','categories'));
    }

    

    public function service_details()
    {   
        return view('frontend.pages.service_details',compact('booking'));
    }
    
    public function profile()
    {
        $profile=Service_provider::all();
        $categories=Categories::all();
        return view('frontend.pages.profile',compact('profile','categories'));
    }

    public function userprofile()
    {
        //dd($uid);
        //  $userprofile=User::find($uid);
        //  return view('frontend.pages.userProfile',compact('userprofile'));
        return view('frontend.pages.userProfile');
    }

    public function allService()
    {
        return view('frontend.pages.allservice');
    }
   
}
