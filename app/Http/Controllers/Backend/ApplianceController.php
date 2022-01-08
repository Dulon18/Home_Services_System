<?php

namespace App\Http\Controllers\Backend;
use App\Models\ApplianceServices;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    public function applianceServices()
    {   $applianc_services=ApplianceServices::all();
        $categories=Categories::all();
        return view('admin.pages.appliance.applianceServices',compact('categories','applianc_services'));
    }

    public function store(Request $request)
    {

        // dd($request);
        $filename=null;
        if ($request->hasFile('image'))
        {
            
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

         //serverside validation
            
         $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'required',
            'category'=>'required',


        ]);
        //dd($request);
        ApplianceServices::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'category'=>$request->category,
            'image'=>$filename,
        ]);
        return redirect()->back()->with('success','Service Add successfully..');
        
    }
}
