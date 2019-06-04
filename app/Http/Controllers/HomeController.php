<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
      public function dashboard()
      {
          return view('dashboard');
      }

      public function chart()
      {
          $result = \DB::table('fact_order')
                    ->selectRaw('SUM(Order_Quantity) as OrderQuantity, Product_ID')
                    ->groupBy('Product_ID')
                    ->orderBy('OrderQuantity', 'DESC')
                    ->take(8)
                    ->get();

          return response()->json($result);
      }
}
