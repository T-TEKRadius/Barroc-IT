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
}) ->name('sales.create');

Route::get('sales/edit', function (){
    return view('sales/edit');
}) ->name('sales.edit');

Route::get('/sales/status', function (){
    return view('sales/status');
}) ->name('sales.status');

Route::get('/sales/invoice', function (){
    return view('sales/invoice');
})  ->name('sales.invoice');
//::get('/sales/invoice/{id}', '');

Route::get('/finance/status', function (){
    return view('finance/status');
}) ->name('finance.status');

Route::get('/sales/nav', function (){
    return view('sales/nav');
});

Route::get('/development/status', function (){
    return view('development/development');
}) ->name('development.status');
