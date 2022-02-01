<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order;
use App\Models\Booking;
use App\Models\AssignProvider;
use App\Models\Service;
use App\Models\Booking_Detail;
use App\Models\User;
use App\Models\Order_details;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BookingController extends Controller
{
    public function booking(){
    
        
        return view('admin.pages.booking.booking');
    }
    public function booking_list()
    {
        $categories=Categories::all();
        $booking=Booking::with('user')->get();
        return view('admin.pages.booking.booking',compact('booking','categories'));
    }

    public function order()
    {
        
        $Customerorders=Booking_Detail::get();
        $CustomerOrderDetails = Booking::get();
        $Services = service::get();

        return view('admin.pages.booking.order',compact('Customerorders','CustomerOrderDetails','Services'));


    }

    public function OrderDetails($id)
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
   
    public function taskAssign(Request $request)
    {
       
        //dd($request);
        $orderid=$request->orderId;
        $Checkorder=AssignProvider::where('orderId',$orderid)->first();
        if($Checkorder!= null)
        {
            return redirect()->back()->with('success','Already assigned');
        }
        else{
             
            AssignProvider::create([

            'orderId'=>$request->orderId,
            'providerId'=>$request->providerId

        ]);

        return redirect()->back()->with('success','assign successfully');
        }


    }
    //Delete assignprovider

    public function deleteTaskAssign($id)
        {
            //dd($id);
        AssignProvider::where('orderId',$id)->delete();
        return redirect()->back()->with('success','Services Deleted.');
        }

  // status update..

    public function getStatusform($id)
    {
       $getCurrentStatus =Booking_Detail::where('orderId',$id)->first();
      
        return view('admin.pages.getOrderStatus',compact('getCurrentStatus'));
    }

    public function statusUpdate(Request $request,$id)
    {
        //dd($request);
        \DB::table('booking__details')
        ->where('orderId', $id)
        ->update([
            'status'     => $request->statusValue
        ]);



      return redirect()->back()->with('success','update successfully..');
       
    }


    
   
}
