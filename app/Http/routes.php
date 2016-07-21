<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

    //index
    Route::get('customer', 'CustomersController@index');
    Route::get('/add/customer', 'CustomersController@add');


    Route::get('order', 'OrdersController@index');
    Route::get('/add/order', 'OrdersController@add');


    Route::get('ship', 'ShipController@index');
    Route::get('/add/ship', 'ShipController@add');



    Route::post('/add/order', 'OrdersController@update');