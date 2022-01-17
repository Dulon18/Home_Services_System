<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {
        $categories=Categories::all();
        return view('frontend.pages.payment',compact('categories'));
    }
}
