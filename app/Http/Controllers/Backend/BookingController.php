<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
    
        
        return view('admin.pages.booking.booking');
    }
    
}
