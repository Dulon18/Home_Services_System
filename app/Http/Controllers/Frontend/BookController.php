<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function booknow()
    {
        return view('frontend.pages.book');
    }

    public function book()
    {
        return view('frontend.pages.location');
    }
}
