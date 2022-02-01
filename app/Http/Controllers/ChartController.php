<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Booking_Detail;
use App\Models\Booking;
use App\Models\Service;

class ChartController extends Controller
{
    public function piechart()
    {
        $result = Booking::select(DB::raw("select count(*) as total_order,
        id from bookings  group by id"));
        //dd($result);
        $chartdata="";

        $totalComplateTask=Booking_Detail::where('status',2)->get()->count();
        
        foreach($result as $list)
        {
            $chartdata.="['".$list->id."',  '".$list->total_order."']";
        }
        
            return view('admin.pages.dashboard.AD_dashboard');
        
    }
}
