<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\Booking;
use App\Models\AssignProvider;
use App\Models\Booking_Detail;
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
        $categories=Categories::all();
        if(request()->search){
            $key=request()->search;
            $services = Service::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->orWhere('price','LIKE','%'.$key.'%')
                ->get();
            return view('frontend.pages.searching',compact('services','key','categories'));
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
    // For Service Provider 
    public function profile()
    {
        $profile=Service_provider::all();
        $categories=Categories::all();
        $assignList = AssignProvider::get(); 
        $GetOrder=Booking_Detail::get();  

        return view('frontend.pages.profile',
        compact(
            'profile','categories',
            'assignList','GetOrder',


        ));
    }
    //Getting Order Details
    public function providerOrderDetails($id)
    {
        $GetOrder=Booking_Detail::where('orderId',$id)->first();
        $GetOrderitem=Booking::where('order_number',$id)->get();
        $GetOrderitemById=Booking::where('order_number',$id)->first();  
        $customerDetails=User::where('id',$GetOrder->customer_id)->first();
        $services=Service::all();
        $providers=User::where('role','sprovider')->get();
        $Checkorder=AssignProvider::where('orderId',$id)->first();
        $assignList = AssignProvider::get();    
        $getAssignProvider=User::get();
        
        return view('admin.pages.booking.orderDetails',compact(
                'GetOrder','GetOrderitem',
                'services','GetOrderitemById',
                'customerDetails','providers',
                'Checkorder','assignList','getAssignProvider',
          
        ));
    }




    public function userprofile()
    {
        //dd($uid);
        //  $userprofile=User::find($uid);
        //  return view('frontend.pages.userProfile',compact('userprofile'));
        $categories=Categories::all();
        $Customerorders=Booking_Detail::get();
        $CustomerOrderDetails = Booking::get();
        $Services = service::get();
        // dd($Customerorders);
        return view('frontend.pages.userProfile',compact('categories','Customerorders','CustomerOrderDetails','Services'));
    }

    public function allService()
    {
        return view('frontend.pages.allservice');
    }


   
}
