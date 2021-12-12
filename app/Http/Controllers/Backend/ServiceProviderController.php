<?php

namespace App\Http\Controllers\Backend;
use App\Models\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function SP_dashboard()
    {
        //data retraiving...

        $providers=Service_provider::all();
        return view('admin.pages.serviceProvider.SP-list',compact('providers'));
    }

    public function add()
    {
        return view('admin.pages.serviceProvider.add_SP');
    }

    public function store(Request $request)
    {
        $filename="";
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
        
        // dd($request->all());


        //serverside validation
        
            $request->validate([
            'name'=>'required',
            'profession'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phn'=>'required | numeric | digits:11',
            'exp'=>'required',
            'salary'=>'required|numeric',

        ]);

        //dd('ok');

        Service_provider::create([

            //'DB name' =>$request-> form name,

            'name'=>$request->name,
            'profession'=>$request->profession,
            'address'=>$request->address,
            'email'=>$request->email,
            'phn'=>$request->phn,
            'exp'=>$request->exp,
            'salary'=>$request->salary,
            'image'=>$filename,


        ]);
        return redirect()->back()->with('success','Service Provider info Add successfully....');
    }

    
}
