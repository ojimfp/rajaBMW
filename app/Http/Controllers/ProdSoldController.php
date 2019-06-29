<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdSoldController extends Controller
{
    public function chartProdSold1()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty1, fact_order.Product_ID')
            ->where('dim_date.Year', 2015)
            ->groupBy('fact_order.Product_ID')
            ->orderBy('sum_qty1', 'DESC')
            ->take(10)
            ->get();


        return response()->json($query);
    }

    public function chartProdSold2()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty2, fact_order.Product_ID')
            ->where('dim_date.Year', 2016)
            ->groupBy('fact_order.Product_ID')
            ->orderBy('sum_qty2', 'DESC')
            ->take(10)
            ->get();

        return response()->json($query);
    }

    public function chartProdSold3()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty3, fact_order.Product_ID')
            ->where('dim_date.Year', 2017)
            ->groupBy('fact_order.Product_ID')
            ->orderBy('sum_qty3', 'DESC')
            ->take(10)
            ->get();

        return response()->json($query);
    }

    public function chartProdGrow()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as qty_growth, dim_date.Year')
            ->whereBetween('dim_date.Year', [2015, 2017])
            ->groupBy('dim_date.Year')
            ->orderBy('dim_date.Year', 'ASC')
            ->get();

        return response()->json($query);
    }

    public function chartProdChan1()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty1, dim_channel.Channel_Type')
            ->where('dim_date.Year', 2015)
            ->groupBy('dim_channel.Channel_Type')
            ->get();


        return response()->json($query);
    }

    public function chartProdChan2()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty2, dim_channel.Channel_Type')
            ->where('dim_date.Year', 2016)
            ->groupBy('dim_channel.Channel_Type')
            ->get();
        
        return response()->json($query);
    }

    public function chartProdChan3()
    {
        $query = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->selectRaw('SUM(fact_order.Order_Quantity) as sum_qty3, dim_channel.Channel_Type')
            ->where('dim_date.Year', 2017)
            ->groupBy('dim_channel.Channel_Type')
            ->get();

        return response()->json($query);
    }
}
