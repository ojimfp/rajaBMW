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
Route::get('product_sold', function () {
   return view('product_sold');
});
Route::get('revenue', function () {
   return view('revenue');
});
Route::get('cogs', function () {
   return view('cogs');
});
Route::get('net_profit', function () {
   return view('net_profit');
});
Route::get('margin', function () {
   return view('margin');
});
Route::get('order_value', function () {
   return view('order_value');
});
Route::get('receivable', function () {
   return view('receivable');
});
Route::get('payable', function () {
   return view('payable');
});
Route::get('total_cust', function () {
   return view('total_cust');
});
Route::get('clv', function () {
   return view('clv');
});
Route::get('conversion_rate', function () {
   return view('conversion_rate');
});
Route::get('cust_retention', function () {
   return view('cust_retention');
});
Route::get('cust_churn', function () {
   return view('cust_churn');
});
Route::get('cust_order_freq', function () {
   return view('cust_order_freq');
});
Route::get('cust_order_quantity', function () {
   return view('cust_order_quantity');
});
Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');
