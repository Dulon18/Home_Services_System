<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Service;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $services=Service::all();
        return view('frontend.pages.home',compact('services'));
    }

    public function category(){
        $categories=Categories::all();
        return view('frontend.pages.category',compact('categories'));
    }
}
