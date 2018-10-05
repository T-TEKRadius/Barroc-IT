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

Route::get('/', 'HomeController@index');

Route::get('/index', 'HomeController@index');

Route::get('/development', 'DevelopmentController@index');

Route::get('/sales', 'SalesController@index');

Route::get('/finance', 'FinanceController@index');

Route::get('/sales/create', function (){
    return view('sales/create');
});

Route::get('sales/edit', function (){
    return view('sales/edit');
});

Route::get('/sales/status', function (){
    return view('sales/status');
});

Route::get('/sales/invoice', function (){
    return view('sales/invoice');
});
//::get('/sales/invoice/{id}', '');

Route::get('/finance/status', function (){
    return view('finance/status');
});