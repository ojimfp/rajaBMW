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

        $result = \DB::table('dim_product')
                    ->take(10)
                    ->get();

        return response()->json($result);
      }
}
