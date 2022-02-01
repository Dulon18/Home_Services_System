<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\AssignProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BillingController extends Controller
{
    public function bill(Request $request){
        
        $getprovider=User::where('role','sprovider')->get();

        $start_date = $request->form;
        $end_date = $request->to;
            
                $getdate =\DB::select("SELECT * FROM booking__details WHERE created_at BETWEEN '$start_date 00:00:00'AND' $end_date 23:59:59'") ;
                

        return view('admin.pages.Report.bill',compact('getprovider','getdate'));
    }

    public function providerReport(Request $request)
    {
        // //dd($request);
        // $start_date = Carbon::parse($request->form)->format('Y-m-d');
        // $end_date = Carbon::parse($request->to)->format('Y-m-d');

        // $GetDate=AssignProvider::get();
        

            // return view('admin.pages.Report.bill',compact('getdate'));

    }


}
