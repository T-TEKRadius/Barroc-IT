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

# Guest

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::post('/', 'ClientController@login')->name('login.login');
});

Route::get('/logout', 'ClientController@logout')->name('logout');

# SALES

Route::group(['middleware' => 'sales'], function () {

    Route::get('/sales', 'ClientController@index')->name('sales.index');
    Route::get('/sales/create', function () {return view('sales/create');});
    Route::post('ClientController', 'ClientController@create');
    Route::post('/sales/apply/{id}', 'ClientController@apply');
    Route::get('/sales/edit/{id}', 'ClientController@edit')->name('sales.edit');
    Route::get('/sales/status/{id}', 'ClientController@show')->name('invoice.show');
    Route::get('/sales/status/create/{id}', 'UploadController@show')->name('invoice.add.show');
    Route::post('/sales/status/create/{id}', 'UploadController@add')->name('invoice.add.add');
    Route::get('/sales/status/delete/{id}/{link}', 'UploadController@delete')->name('invoice.delete');
    Route::get('/sales/status/show/{id}/{link}', 'UploadController@invoice')->name('invoices.show');
    Route::get('/sales/status/{id}/{link}', 'UploadController@download')->name('invoice.download');
});
# Finance

Route::group(['middleware' => 'finance'], function () {

    Route::get('/finance', 'FinanceController@index')->name('finance.show');
    Route::get('/finance/edit/{id}', 'ClientController@edit');
    Route::post('/finance/apply/{id}', 'ClientController@apply_finance')->name('finance.apply');
    Route::get('/finance/invoice/show/{id}/{link}', 'UploadController@invoice');
    Route::get('/finance/invoice/create/{id}', 'UploadController@show');
    Route::post('/finance/invoice/create/{id}', 'UploadController@add');
});

# Development

Route::group(['middleware' => 'development'], function () {

    Route::get('/development', 'ClientController@development')->name('development');
    Route::get('/development/{id}', 'ClientController@done_development')->name('development.done');
});
