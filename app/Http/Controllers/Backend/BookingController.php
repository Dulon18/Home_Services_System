<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order;
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
        $book=Order::with('user')->get();
        return view('admin.pages.booking.order',compact('book'));
    }
    public function orderDetails()
    {
        $order_details=Order_details::with('user','service','order')->paginate(8);
        
        return view('admin.pages.booking.orderDetails',compact('order_details'));
    }
    
    
}
