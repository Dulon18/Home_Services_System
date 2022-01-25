<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Service;

class ChartController extends Controller
{
    public function piechart()
    {
        $result =Order_details::select(DB::raw("select count(*) as total_order,
        order_id from order_details  group by order_id"));
        //dd($result);
        $chartdata="";
        foreach($result as $list)
        {
            $chartdata.="['".$list->order_id."',  '".$list->total_order."']";
        }
        
            return view('admin.pages.dashboard.AD_dashboard');
        
    }
}
