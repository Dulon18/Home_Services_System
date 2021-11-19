<?php

namespace App\Http\Controllers\Backend;
use App\Models\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function SP_dashboard()
    {
        return view('admin.pages.SP-list');
    }

    public function add()
    {
        return view('admin.pages.add_SP');
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
        return redirect()->back();
    }
}
