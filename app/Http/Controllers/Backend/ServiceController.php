<?php

namespace App\Http\Controllers\Backend;
use App\Models\Service;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(){
        $services=Service::with('category')->get();
        return view('admin.pages.services.services',compact('services'));

    }
    public function add()
    {   
        $categories = Categories::all();
        return view('admin.pages.services.add_services',compact('categories'));
    }

    public function store(Request $request){
        // dd($requesst);

        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
            'category'=>'required',

        ]);

        Service::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'category'=>$request->category,

        ]);
        return redirect()->back()->with('success','Service Add successfully..');
    }
    
}
