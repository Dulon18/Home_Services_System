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
        //dd($request->all())

        Service_provider::create([
            //'DB name' =>$request-> form name,


            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'profession'=>$request->profession,
            'address'=>$request->address,


        ]);
        return redirect()->route('admin.serviceProvider.dashboard');
    }
}
