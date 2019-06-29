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

Route::get('chartProdSold1', 'ProdSoldController@chartProdSold1');
Route::get('chartProdSold2', 'ProdSoldController@chartProdSold2');
Route::get('chartProdSold3', 'ProdSoldController@chartProdSold3');
Route::get('chartProdGrow', 'ProdSoldController@chartProdGrow');
Route::get('chartProdLoc', 'ProdSoldController@chartProdLoc');
Route::get('chartProdChan1', 'ProdSoldController@chartProdChan1');
Route::get('chartProdChan2', 'ProdSoldController@chartProdChan2');
Route::get('chartProdChan3', 'ProdSoldController@chartProdChan3');

Route::get('chartNetGrow', 'NetProfController@chartNetGrow');
Route::get('chartNetLoc', 'NetProfController@chartNetLoc');
Route::get('chartNetChan1', 'NetProfController@chartNetChan1');
Route::get('chartNetChan2', 'NetProfController@chartNetChan2');
Route::get('chartNetChan3', 'NetProfController@chartNetChan3');

Route::get('chartMrgGrow', 'MarginController@chartMrgGrow');
Route::get('chartMrgLoc', 'MarginController@chartMrgLoc');
Route::get('chartMrgChan1', 'MarginController@chartMrgChan1');
Route::get('chartMrgChan2', 'MarginController@chartMrgChan2');
Route::get('chartMrgChan3', 'MarginController@chartMrgChan3');

Route::get('chartAOVGrow', 'AOVController@chartAOVGrow');
Route::get('chartAOVLoc', 'AOVController@chartAOVLoc');
Route::get('chartAOVChan1', 'AOVController@chartAOVChan1');
Route::get('chartAOVChan2', 'AOVController@chartAOVChan2');
Route::get('chartAOVChan3', 'AOVController@chartAOVChan3');

Route::get('chartCustGrowth', 'ChartController@chartCustGrowth');
Route::get('chartCustLoc', 'ChartController@chartCustLoc');
Route::get('custChan', 'ChartController@index');
Route::get('chartCustChan/{dateId}', 'ChartController@chartCustChan');
Route::get('chartCustCat', 'ChartController@chartCustCat');

Route::get('chartAOQGrowth', 'ChartController@chartAOQGrowth');
Route::get('chartAOQChan', 'ChartController@chartAOQChan');

Route::get('chartAOFGrowth', 'ChartController@chartAOFGrowth');
Route::get('chartAOFChan', 'ChartController@chartAOFChan');

Route::get('ps_menu', function () {
    return view('ps_menu');
});
Route::get('ps_main', function () {
    return view('ps_main');
});
Route::get('ps_growth', function () {
    return view('ps_growth');
});
Route::get('ps_loc', function () {
    return view('ps_loc');
});
Route::get('ps_channel', function () {
    return view('ps_channel');
});

Route::get('np_menu', function () {
    return view('np_menu');
});
Route::get('np_growth', function () {
    return view('np_growth');
});
Route::get('np_loc', function () {
    return view('np_loc');
});
Route::get('np_channel', function () {
    return view('np_channel');
});

Route::get('mr_menu', function () {
    return view('mr_menu');
});
Route::get('mr_growth', function () {
    return view('mr_growth');
});
Route::get('mr_loc', function () {
    return view('mr_loc');
});
Route::get('mr_channel', function () {
    return view('mr_channel');
});

Route::get('aov_menu', function () {
    return view('aov_menu');
});
Route::get('aov_growth', function () {
    return view('aov_growth');
});
Route::get('aov_loc', function () {
    return view('aov_loc');
});
Route::get('aov_channel', function () {
    return view('aov_channel');
});

Route::get('cust_menu', function () {
    return view('cust_menu');
});
Route::get('cust_growth', function () {
    return view('cust_growth');
});
Route::get('cust_loc', function () {
    return view('cust_loc');
});
Route::get('cust_channel', function () {
    return view('cust_channel');
});
Route::get('cust_category', function () {
    return view('cust_category');
});

Route::get('aoq_menu', function () {
    return view('aoq_menu');
});
Route::get('aoq_growth', function () {
    return view('aoq_growth');
});
Route::get('aoq_loc', function () {
    return view('aoq_loc');
});
Route::get('aoq_channel', function () {
    return view('aoq_channel');
});

Route::get('aof_menu', function () {
    return view('aof_menu');
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

Route::get('clv_menu', function () {
    return view('clv_menu');
});
Route::get('clv', function () {
    return view('clv');
});
Route::get('clv_growth', function () {
    return view('clv_growth');
});
Route::get('clv_loc', function () {
    return view('clv_loc');
});
Route::get('clv_channel', function () {
    return view('clv_channel');
});

Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');
