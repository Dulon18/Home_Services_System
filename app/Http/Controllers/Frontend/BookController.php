<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booknow($id)
    {   
        $booking = Service::find($id);
        return view('frontend.pages.book',compact('booking'));
    }
    

    public function book()
    {
        return view('frontend.pages.location');
    }
}
