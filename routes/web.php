<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('pp_menu', function () {
   return view('pp_menu');
});
    Route::get('pp_prod_sold', function () {
       return view('pp_prod_sold');
    });
    Route::get('pp_prod_growth', function () {
       return view('pp_prod_growth');
    });
    Route::get('pp_prod_geo', function () {
       return view('pp_prod_geo');
    });
    Route::get('pp_prod_channel', function () {
       return view('pp_prod_channel');
    });
    Route::get('pp_prod_cust', function () {
       return view('pp_prod_cust');
    });

Route::get('cf_menu', function () {
   return view('cf_menu');
});
    Route::get('cf_revenue', function () {
       return view('cf_revenue');
    });
    Route::get('cf_revenue_growth', function () {
       return view('cf_revenue_growth');
    });
    Route::get('cf_revenue_geo', function () {
       return view('cf_revenue_geo');
    });
    Route::get('cf_revenue_channel', function () {
       return view('cf_revenue_channel');
    });
    Route::get('cf_revenue_cust', function () {
       return view('cf_revenue_cust');
    });
    Route::get('cf_np', function () {
       return view('cf_np');
    });
    Route::get('cf_np_growth', function () {
       return view('cf_np_growth');
    });
    Route::get('cf_np_geo', function () {
       return view('cf_np_geo');
    });
    Route::get('cf_np_channel', function () {
       return view('cf_np_channel');
    });
    Route::get('cf_np_cust', function () {
       return view('cf_np_cust');
    });
    Route::get('cf_cogs', function () {
       return view('cf_cogs');
    });
    Route::get('cf_margin', function () {
       return view('cf_margin');
    });
    Route::get('cf_aov', function () {
       return view('cf_aov');
    });
    Route::get('cf_aov_growth', function () {
       return view('cf_aov_growth');
    });
    Route::get('cf_aov_geo', function () {
       return view('cf_aov_geo');
    });
    Route::get('cf_aov_channel', function () {
       return view('cf_aov_channel');
    });

Route::get('ar_menu', function () {
   return view('ar_menu');
});
    Route::get('ar_average', function () {
       return view('ar_average');
    });
    Route::get('ar_turnover', function () {
       return view('ar_turnover');
    });

Route::get('ap_menu', function () {
   return view('ap_menu');
});
    Route::get('ap_average', function () {
       return view('ap_average');
    });
    Route::get('ap_turnover', function () {
       return view('ap_turnover');
    });

Route::get('cp_menu', function () {
   return view('cp_menu');
});
    Route::get('cp_total_cust', function () {
       return view('cp_total_cust');
    });
    Route::get('cp_cust_growth', function () {
       return view('cp_cust_growth');
    });
    Route::get('cp_cust_geo', function () {
       return view('cp_cust_geo');
    });
    Route::get('cp_cust_channel', function () {
       return view('cp_cust_channel');
    });

Route::get('cc_menu', function () {
   return view('cc_menu');
});
    Route::get('cc_conv_rate', function () {
       return view('cc_conv_rate');
    });
    Route::get('cc_conv_growth', function () {
       return view('cc_conv_growth');
    });
    Route::get('cc_conv_geo', function () {
       return view('cc_conv_geo');
    });
    Route::get('cc_conv_channel', function () {
       return view('cc_conv_channel');
    });

Route::get('cl_menu', function () {
   return view('cl_menu');
});
    Route::get('cl_cust_retention', function () {
       return view('cl_cust_retention');
    });
    Route::get('cl_cust_churn', function () {
       return view('cl_cust_churn');
    });

Route::get('cs_menu', function () {
   return view('cs_menu');
});
    Route::get('cs_coq', function () {
       return view('cs_coq');
    });
    Route::get('cs_coq_growth', function () {
       return view('cs_coq_growth');
    });
    Route::get('cs_coq_geo', function () {
       return view('cs_coq_geo');
    });
    Route::get('cs_coq_channel', function () {
       return view('cs_coq_channel');
    });

Route::get('cof', function () {
   return view('cof');
});
Route::get('cof_growth', function () {
   return view('cof_growth');
});
Route::get('cof_geo', function () {
   return view('cof_geo');
});
Route::get('cof_channel', function () {
   return view('cof_channel');
});

Route::get('clv', function () {
   return view('clv');
});

Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');
