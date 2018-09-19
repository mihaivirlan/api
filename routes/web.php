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

    Route::get('api/get/{id}',['as'=>'api/get','uses'=>'ApiController@show']);
    Route::delete('api/delete/{id}',['as'=>'api/delete','uses'=>'ApiController@destroy']);
    Route::post('api/update/{id}',['as'=>'api/post','uses'=>'ApiController@update']);
    Route::put('api/put/',['as'=>'api/put','uses'=>'ApiController@store']);
    Route::get('history',['as'=>'history','uses'=>'HistoryController@history']);
    Route::get('report',['as'=>'report','uses'=>'HistoryController@report']);
