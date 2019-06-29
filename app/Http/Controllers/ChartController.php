<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class ChartController extends Controller
{

    public function chartCustGrowth()
    {
        $result = \DB::table('fact_order')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as cust_growth, dim_date.Year')
            ->whereBetween('dim_date.Year', [2015, 2017])
            ->groupBy('dim_date.Year')
            ->orderBy('dim_date.Year', 'ASC')
            ->get();

        return response()->json($result);
    }

    public function index(Request $request)
    {
        $dateId = isset($request->Date_ID) ? $request->Date_ID : 1;

        $chartCustChan = ChartController::chartCustChan($dateId);

        $months = \DB::table('dim_date')
            ->orderBy('Month', 'ASC')
            ->get();

        $years = \DB::table('dim_date')
            ->whereBetween('Year', [2015, 2017])
            ->orderBy('Year', 'ASC')
            ->get();

        return view('cp_cust_channel', compact('months', 'years', 'chartCustChan', 'dateId'));
    }

    public function chartCustChan($dateId)
    {
        $query = \DB::table('fact_order')
            ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
            ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
            ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as CustomerID, dim_channel.Channel_Type')
            ->when($dateId != 'all', function ($query, $dateId) {
                $query->where('dim_date.Date_ID', '=', $dateId);
            })
            ->groupBy('dim_channel.Channel_Type')
            ->get();

        return response()->json($query);
    }

    // public function chartCustChan2()
    // {
    //     $result = \DB::table('fact_order')
    //         ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
    //         ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
    //         ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as CustomerID2, dim_channel.Channel_Type, dim_date.Year')
    //         ->where('dim_date.Year', '=', 2016)
    //         ->groupBy('dim_channel.Channel_Type')
    //         ->get();

    //     return response()->json($result);
    // }

    public function chartCustLoc()
    {
        $custLoc = \Lava::DataTable();

        $data = \DB::table('fact_order')
                ->join('dim_location', 'fact_order.Location_ID', '=', 'dim_location.Location_ID')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->distinct()
                ->selectRaw('COUNT(fact_order.Customer_ID) as `0`, dim_location.State as `1`, dim_date.Year')
                ->where('dim_date.Year', '=', 2017)
                ->get()->toArray();

        $custLoc->addStringColumn("State")
                ->addNumberColumn("Customer Count")
                ->addRows($data);

        $chart = \Lava::GeoChart('Customer by Location', $custLoc);

        return view("cp_cust_loc", compact('chart'));
    }

    public function chartCustCat()
    {
        $lost = \DB::table('fact_order')
                // ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->join('dim_customer', 'fact_order.Customer_ID', '=', 'dim_customer.Customer_ID')
                ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as lost_cust, dim_customer.Customer_Category')
                ->where('dim_customer.Customer_Category', 'Lost Customer')
                // ->whereBetween('dim_date.Year', [2015, 2017])
                // ->orderBy('dim_date.Year', 'ASC')
                ->get();

        $loyal = \DB::table('fact_order')
                // ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->join('dim_customer', 'fact_order.Customer_ID', '=', 'dim_customer.Customer_ID')
                ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as loyal_cust, dim_customer.Customer_Category')
                ->where('dim_customer.Customer_Category', 'Loyal Customer')
                // ->whereBetween('dim_date.Year', [2015, 2017])
                // ->orderBy('dim_date.Year', 'ASC')
                ->get();

        $new = \DB::table('fact_order')
                // ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->join('dim_customer', 'fact_order.Customer_ID', '=', 'dim_customer.Customer_ID')
                ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as new_cust, dim_customer.Customer_Category')
                ->where('dim_customer.Customer_Category', 'New Customer')
                // ->whereBetween('dim_date.Year', [2015, 2017])
                // ->orderBy('dim_date.Year', 'ASC')
                ->get();

        $return = \DB::table('fact_order')
                // ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->join('dim_customer', 'fact_order.Customer_ID', '=', 'dim_customer.Customer_ID')
                ->selectRaw('COUNT(DISTINCT fact_order.Customer_ID) as return_cust, dim_customer.Customer_Category')
                ->where('dim_customer.Customer_Category', 'Returning Customer')
                // ->whereBetween('dim_date.Year', [2015, 2017])
                // ->orderBy('dim_date.Year', 'ASC')
                ->get();

        // return view('cp_cust_category', compact('lost', 'loyal', 'new', 'return'));
        return response()->json([$lost, $loyal, $new, $return]);
    }

    public function chartAOQGrowth()
    {
        $line = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(SUM(fact_order.Order_Quantity)/COUNT(DISTINCT fact_order.Customer_ID), 2) as aoq,
                dim_date.Year')
                ->whereBetween('dim_date.Year', [2015, 2017])
                ->groupBy('dim_date.Year')
                ->orderBy('dim_date.Year', 'ASC')
                ->get();

        $bar = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('SUM(fact_order.Order_Quantity) as sum_oq, COUNT(DISTINCT fact_order.Customer_ID) as count_cust,
                dim_date.Year')
                ->whereBetween('dim_date.Year', [2015, 2017])
                ->groupBy('dim_date.Year')
                ->orderBy('dim_date.Year', 'ASC')
                ->get();

        return response()->json([$line, $bar]);
    }

    public function chartAOQChan()
    {
        $result = \DB::table('fact_order')
                ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(SUM(fact_order.Order_Quantity)/COUNT(DISTINCT fact_order.Customer_ID), 2) as aoq,
                        dim_channel.Channel_Name')
                ->where('dim_date.Year', 2017)
                ->groupBy('Channel_Name')
                ->get();

        return response()->json($result);
    }

    public function chartAOFGrowth()
    {
        $query = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->selectRaw('ROUND(COUNT(DISTINCT fact_order.Order_ID)/COUNT(DISTINCT fact_order.Customer_ID)/
                COUNT(DISTINCT fact_order.Channel_ID), 2) as aof, dim_date.Year')
                ->whereBetween('dim_date.Year', [2015, 2017])
                ->groupBy('dim_date.Year')
                ->orderBy('dim_date.Year', 'ASC')
                ->get();

        return response()->json($query);
    }

    public function chartAOFChan()
    {
        $result = \DB::table('fact_order')
                ->join('dim_date', 'fact_order.Date_ID', '=', 'dim_date.Date_ID')
                ->join('dim_channel', 'fact_order.Channel_ID', '=', 'dim_channel.Channel_ID')
                ->selectRaw('ROUND(COUNT(DISTINCT fact_order.Order_ID)/COUNT(DISTINCT fact_order.Customer_ID)/
                COUNT(DISTINCT fact_order.Channel_ID), 2) as aof, dim_channel.Channel_Type')
                ->where('dim_date.Year', 2017)
                ->groupBy('Channel_Type')
                ->get();

        return response()->json($result);
    }
}
