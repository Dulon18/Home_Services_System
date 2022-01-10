<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\ApplianceService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booknow($id)
    {   
        $booking = Service::find($id);
        
        return view('frontend.pages.book',compact('booking'));
    }
    public function bookAppliance($id)
    {   
       
        $appliance=ApplianceService::find($id);
        return view('frontend.pages.applianceBooking',compact('appliance'));
    }


    public function book()
    {
        return view('frontend.pages.location');
    }

    public function getCart()
    {
        $carts= session()->get('cart');
        return view('frontend.pages.cart',compact('carts'));

    }
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');
    }
    public function addToCart($id)
    {

        $service=Service::find($id);        if(!$service)
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
            return redirect()->back()->with('message', 'Product Added to Cart.');
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

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }

        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)
        else
        {
                $cartExist[$id]['quantity']++;
                session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
            }

            
    }

    


}
