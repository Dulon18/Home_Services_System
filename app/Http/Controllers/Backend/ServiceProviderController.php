<?php

namespace App\Http\Controllers\Backend;
use App\Models\Service_provider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function SP_dashboard()
    {
        //searching start..
        $key=null;
        if(request()->search){
            $key=request()->search; //here search came to form name 
            $providers = Service_provider::with('sevices')
            ->where('name','LIKE','%'.$key.'%')
            ->orwhere('profession','LIKE','%'.$key.'%')
            ->orwhere('exp','LIKE','%'.$key.'%')
            ->get();
            return view('admin.pages.serviceProvider.search',compact('$providers','key'));
        } // searching end...
        //end
         
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

    public function sprovider_view($id)
    {
        //dd($id);
        $Sprovider=Service_provider::find($id);
        return view('admin.pages.serviceProvider.sprovider_view',compact('Sprovider'));
    }

    public function sprovider_edit($id)
    {
        //dd("ok");
        $provider=Service_provider::find($id);
        if($provider)
        {
        return view('admin.pages.serviceProvider.s_provider_edit',compact('provider'));
        }
    }


    
}
