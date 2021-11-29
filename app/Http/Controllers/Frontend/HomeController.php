<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $services=Service::all();
        return view('frontend.pages.home',compact('services'));
    }
}
