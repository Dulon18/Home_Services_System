<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\Categories;
use App\Models\Booking;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Booking_Detail;
use App\Models\ApplianceService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booknow($id)
    {   
        $booking = Service::find($id);
        $categories=Categories::all();
        
        return view('frontend.pages.book',compact('booking','categories'));
    }


    public function bookAppliance($id)
    {   
        $categories=Categories::all();
        $appliance=ApplianceService::find($id);
        return view('frontend.pages.applianceBooking',compact('appliance','categories'));
    }


    public function booking_list()
    {
        $categories=Categories::all();
        $booking=Booking::with('user')->get();
        $book=Booking_Detail::with('order')->get();
        $order= rand(100000,999999);
        return view('admin.pages.booking.booking',compact('booking','categories','book'));
    }

    public function orderInfo()
    {
        $categories=Categories::all();
        // $orders=Booking::with('user')->get();
        $carts=session()->get('cart');
        
        return view('frontend.pages.orderForm',compact('carts','categories'));


    }
    public function storeOrders(Request $request)
    {
        $categories=Categories::all();
        $orders=Booking::with('user')->get();
        $carts=session()->get('cart');
        // return view('frontend.pages.order',compact('carts','categories'));


        for($i=0;$i<count($request->quantity);$i++){
            $datasave=[
                'order_number'=>$request->ordernumber,
                'user_id'=>$request->userid,
                'serviceid'=>$request->serviceId[$i],
                'quantity'=>$request->quantity[$i],
                'price'=>$request->price,
                'total_price'=>$request->totalprice,
            ];
            \DB::table('bookings')->insert($datasave);

        }

         Booking_Detail::create([

            //'DB name' =>$request-> form name,

            'orderId'=>$request->ordernumber,
            'Area'=>$request->area,
            'Sector'=>$request->sector,
            'address'=>$request->addrees,
            'requestDate'=>$request->requestdate,

        ]);

        session()->forget('cart');
        
        // return view('frontend.pages.order',compact('datasave'));
        return redirect()->back()->with('success','Service Add successfully..');

    }

    public function orderCancel($id)
    {
        //find the data
       $order=Order::find($id);
       $order->update([
           'status'=>'cancel'
       ]);

       return redirect()->back();
    }
    


    public function getCart()
    {   
        $categories=Categories::all();
        $carts=session()->get('cart');
        return view('frontend.pages.cart',compact('carts','categories'));

    }
    public function checkout()
    {
        $carts=session()->get('cart');

        if($carts)
        {
            // $book=Booking::create([
            //     'user_id'=>auth()->user()->id,
            //     'total_price'=>array_sum(array_column($carts,'price')),

            // ]);

            $book=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>array_sum(array_column($carts,'price')),

            ]);

            foreach($carts as $cart)
            {
                // Booking_Detail::create([
                //     'booking_id'=>$book->id,
                //     'service_id'=>$cart['id'],
                //     'unit_price'=>$cart['price'],
                //     'quantity'=>$cart['quantity'],
                //     'sub_total'=>$cart['quantity'] * $cart['price'] ,
                // ]);

                // Order_details::create([
                //     'order_id'=>$book->id,
                //     'service_id'=>$cart['id'],
                //     'unit_price'=>$cart['price'],
                //     'quantity'=>$cart['quantity'],
                //     'sub_total'=>$cart['quantity'] * $cart['price'] ,
                // ]);



            }

            session()->forget('cart');
            return redirect()->back()->with('success', 'Booked successfully...');
        }
        return redirect()->back()->with('error', 'No data found..');

    }
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success','Cart cleared successfully.');
    }
    public function addToCart($id)
    {

        $service=Service::find($id);       
         if(!$service)
        {
            return redirect()->back()->with('error','No product found.');
        }

        $cartExist=session()->get('cart');

        if(!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $cartData = [
                $id => [
                    'id' =>$id,
                    'image' =>$service->Image, 
                    'name' => $service->name,
                    'price' => $service->price,
                    'quantity'=>1
                    
                ]
            ];
            session()->put('cart', $cartData);
            return redirect()->back()->with('success', 'Product Added to Cart.');
        }

        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
        //dd(isset($cartExist[$id]));
        
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                'id' => $id,
                'image' => $service->Image,
                'name' => $service->name,
                'price' => $service->price,
                'quantity'=>1
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('success', 'Product Added to Cart.');
        }

        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)
        
        
        $cartExist[$id]['quantity']++;
        session()->put('cart', $cartExist);

        return redirect()->back()->with('success', 'Product Added to Cart.');
            

            
    }

    


}
