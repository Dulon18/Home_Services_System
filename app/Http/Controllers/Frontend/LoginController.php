<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use Sentinel;
use Reminder;



class LoginController extends Controller
{
    public function reg()
    {
        $categories=Categories::all();
        return view('frontend.pages.registation',compact('categories'));
    }

    public function regStore(Request $request){
        // dd($request->all());

        $registeras = $request['role'] === 'sprovider' ? 'sprovider':'user';
        // dd($registeras);
        // dd();

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password), 
            'role'=>$registeras     
        ]);
        return redirect()->route('customer.login');
    }

    public function login()
    {
        $categories=Categories::all();
        return view('frontend.pages.login',compact('categories'));
    }

    public function doLogin(Request $request)
    {
        //dd($request->all());
        $user=$request->except('_token');   
        
          //dd($user);

        if(Auth::attempt($user))
            {
                return redirect()->route('frontend.home')->with('success','Logging Successfully..');
            }
        else
        return redirect()->route('customer.login')->with('error','Invalid credintial..');
    }
    




    public function logout()
    { 
        session()->flush();
        Auth::logout();
        return redirect()->route('frontend.home');
    }

   
}
