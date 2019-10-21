<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Definitions
|--------------------------------------------------------------------------
|
| Route::group(...) groups our routes in the prefix v1.
| This is a best practice and makes it easy to upgrade the API in the future.
|
| Route::apiResource(...) creates the resource routes that contain all the required HTTP verbs,
| GET, POST, PUT/PATCH and DELETE.
*/
Route::group(['prefix' => 'v1','namespace' => 'API'], function(){
    Route::apiResource('holidays', 'HolidayHistoryController');
    Route::apiResource('lastlogin', 'LastLoginController');

    /* Route::group(['prefix' => 'holidays'],function(){
        Route::get('/{id}/history',[
            'uses' => 'HolidayHistoryController@history',
            'as' => 'holidays.history',
        ]);
    }); */
});
