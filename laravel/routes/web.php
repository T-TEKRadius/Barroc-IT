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

Route::get('/sales', 'ClientController@index');

Route::get('/sales/create', function (){
    return view('sales/create');
});

Route::post('ClientController', 'ClientController@create');
//Route::post('ClientController', 'ClientController@apply');
Route::post('/sales/apply/{id}','ClientController@apply');


Route::get('/sales/edit', function (){
    return view('sales/edit');
});

Route::get('/sales/edit/{id}', 'ClientController@edit');

Route::get('/sales/status/{id}', 'ClientController@show')->name('invoice.show');
Route::get('/sales/status', 'ClientController@index')->name('sales.index');

Route::get('/finance/status', function (){
    return view('finance/status');
});
