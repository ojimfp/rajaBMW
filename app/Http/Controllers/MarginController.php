<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarginController extends Controller
{
    public function chartMrgGrow()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('ROUND((((SUM(Order_Price)) - (SUM(Order_Cost))) / (SUM(Order_Price)) * 100), 2) as margin,
            dim_date.Year')
            ->whereBetween('dim_date.Year', [2015, 2017])
            ->groupBy('dim_date.Year')
            ->orderBy('dim_date.Year', 'ASC')
            ->get();

        return response()->json($query);
    }

    public function chartMrgChan1()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('ROUND((((SUM(Order_Price)) - (SUM(Order_Cost))) / (SUM(Order_Price)) * 100), 2) as margin,
            dim_channel.Channel_Type')
            ->where('dim_date.Year', 2015)
            ->groupBy('dim_channel.Channel_Type')
            ->get();


        return response()->json($query);
    }

    public function chartMrgChan2()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('ROUND((((SUM(Order_Price)) - (SUM(Order_Cost))) / (SUM(Order_Price)) * 100), 2) as margin,
            dim_channel.Channel_Type')
            ->where('dim_date.Year', 2016)
            ->groupBy('dim_channel.Channel_Type')
            ->get();
        
        return response()->json($query);
    }

    public function chartMrgChan3()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('ROUND((((SUM(Order_Price)) - (SUM(Order_Cost))) / (SUM(Order_Price)) * 100), 2) as margin,
            dim_channel.Channel_Type')
            ->where('dim_date.Year', 2017)
            ->groupBy('dim_channel.Channel_Type')
            ->get();

        return response()->json($query);
    }
}
