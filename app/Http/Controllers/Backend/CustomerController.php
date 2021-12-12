<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()

    {
        $customers=User::all();
        return view('admin.pages.customer.customer',compact('customers'));
    }
}
