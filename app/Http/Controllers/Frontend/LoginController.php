<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function reg()
    {
        return view('frontend.pages.registation');
    }

    public function regStore(Request $request){
        //dd($request->all());

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password),            
        ]);
        return redirect()->route('customer.login');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request)
    {
        //dd($request->all());
        $user=$request->except('_token');   

          //dd($user);

        if(Auth::attempt($user))
            {
                return redirect()->route('frontend.home');
            }
        else
        return redirect()->route('customer.login');
    }

    public function logout()
    { 
        session()->flush();
        Auth::logout();
        return redirect()->route('frontend.home');
    }

   
}
