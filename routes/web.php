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
Route::get('dashboard', 'HomeController@homeData');

Route::get('chartProdSold', 'ChartController@chartProdSold');
Route::get('chartTotalCust', 'ChartController@chartTotalCust');
Route::get('custChan', 'ChartController@index');
Route::get('chartCustChan/{dateId}', 'ChartController@chartCustChan');
Route::get('chartChurn', 'ChartController@chartChurn');
Route::get('chartCustLoc', 'ChartController@chartCustLoc');
Route::get('chartCOQChan', 'ChartController@chartCOQChan');
Route::get('chartAOF', 'ChartController@chartAOF');
Route::get('chartCOFChan', 'ChartController@chartCOFChan');

Route::get('pp_menu', function () {
    return view('pp_menu');
});
Route::get('pp_prod_category', function () {
    return view('pp_prod_category');
});
Route::get('pp_prod_growth', function () {
    return view('pp_prod_growth');
});
Route::get('pp_prod_loc', function () {
    return view('pp_prod_loc');
});
Route::get('pp_prod_channel', function () {
    return view('pp_prod_channel');
});

Route::get('cf_menu', function () {
    return view('cf_menu');
});
Route::get('cf_np_growth', function () {
    return view('cf_np_growth');
});
Route::get('cf_np_loc', function () {
    return view('cf_np_loc');
});
Route::get('cf_np_channel', function () {
    return view('cf_np_channel');
});
Route::get('cf_margin_growth', function () {
    return view('cf_margin_growth');
});
Route::get('cf_margin_loc', function () {
    return view('cf_margin_loc');
});
Route::get('cf_margin_channel', function () {
    return view('cf_margin_channel');
});
Route::get('cf_aov_growth', function () {
    return view('cf_aov_growth');
});
Route::get('cf_aov_loc', function () {
    return view('cf_aov_loc');
});
Route::get('cf_aov_channel', function () {
    return view('cf_aov_channel');
});

Route::get('cp_menu', function () {
    return view('cp_menu');
});
Route::get('cp_cust_growth', function () {
    return view('cp_cust_growth');
});
Route::get('cp_cust_loc', function () {
    return view('cp_cust_loc');
});
Route::get('cp_cust_channel', function () {
    return view('cp_cust_channel');
});
Route::get('cp_cust_category', function () {
    return view('cp_cust_category');
});

Route::get('cl_menu', function () {
    return view('cl_menu');
});

Route::get('cs_menu', function () {
    return view('cs_menu');
});
Route::get('cs_aoq_growth', function () {
    return view('cs_aoq_growth');
});
Route::get('cs_aoq_loc', function () {
    return view('cs_aoq_loc');
});
Route::get('cs_aoq_channel', function () {
    return view('cs_aoq_channel');
});

Route::get('aof_growth', function () {
    return view('aof_growth');
});
Route::get('aof_loc', function () {
    return view('aof_loc');
});
Route::get('aof_channel', function () {
    return view('aof_channel');
});

Route::get('clv', function () {
    return view('clv');
});

Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');
