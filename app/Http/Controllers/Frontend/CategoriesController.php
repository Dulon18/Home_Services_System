<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function category()
   {
    $categories=Categories::all();
    return view('frontend.pages.home',compact('categories'));

   }
}
