<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public static function homeData()
    {
        // Product Sold
        $prodSold = \DB::table('fact_order')
                    ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                    ->selectRaw('SUM(Order_Quantity) as order_qty')
                    ->where('dim_date.Year', '=', 2017)
                    ->get();

        // Net Profit
        $netProfit = \DB::table('fact_order')
                    ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                    ->selectRaw('(SUM(Order_Price)) - (SUM(Order_Cost)) as net_prof')
                    ->where('dim_date.Year', '=', 2017)
                    ->get();

        // Margin
        $margin = \DB::table('fact_order')
                    ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                    ->selectRaw('ROUND((((SUM(Order_Price)) - (SUM(Order_Cost))) / (SUM(Order_Price)) * 100), 2) as margin')
                    ->where('dim_date.Year', '=', 2017)
                    ->get();

        // Average Order Value
        $aov = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(SUM(Order_Price) / COUNT(DISTINCT Customer_ID)) as aov')
                ->where('dim_date.Year', '=', 2017)
                ->get();

        // Total Customer
        $totalCust = \DB::table('fact_order')
                    ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                    ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as cust_count')
                    ->where('dim_date.Year', '=', 2017)
                    ->get();
        
        // Average Order Quantity
        $aoq = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(SUM(fact_order.Order_Quantity)/COUNT(DISTINCT fact_order.Customer_ID), 2) as aoq')
                ->where('dim_date.Year', '=', 2017)
                ->get();

        // Average Order Frequency
        $aof = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(COUNT(DISTINCT fact_order.Order_ID)/COUNT(DISTINCT fact_order.Customer_ID), 2) as aof')
                ->where('dim_date.Year', '=', 2017)
                ->get();
        
        // Average Customer Lifetime Value
        // $clv = \DB::table('fact_order')
        //         ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
        //         ->selectRaw('COUNT(DISTINCT fact_order.Order_ID)/COUNT(DISTINCT fact_order.Customer_ID) as aof')
        //         ->where('dim_date.Year', '=', 2017)
        //         ->get();
                //net profit / custID * retentionrate / 1-retentionrate

        // Customer Retention
        // $retention = \DB::table('fact_order')
        //             ->join('dim_customer', 'fact_order.Customer_ID', '=', 'dim_customer.Customer_ID')
        //             ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
        //             ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as reten')
        //             ->where('dim_date.Year', '=', 2017)
        //             ->get();

        // Customer Churn

        return view('dashboard', compact('prodSold', 'netProfit', 'margin', 'aov', 'totalCust', 'aoq', 'aof'));
    }
}
