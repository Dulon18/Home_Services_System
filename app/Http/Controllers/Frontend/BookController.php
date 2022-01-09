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
}
