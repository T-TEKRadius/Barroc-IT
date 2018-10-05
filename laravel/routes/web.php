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

Route::get('/', function () {
    return view('index');
});

Route::get('/development', function () {
    return view('development/development');
});

Route::get('/sales', function (){
    return view('sales/sales');
});

Route::get('/sales/create', function (){
    return view('sales/create');
});

Route::get('sales/edit', function (){
    return view('sales/edit');
});

Route::get('/sales/status', function (){
    return view('sales/status');
});

Route::get('/finance/status', function (){
    return view('finance/status');
});