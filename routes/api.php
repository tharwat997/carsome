<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'cors'], function () {

    Route::prefix('booking')->group(function () {
        Route::get('get', 'BookingController@get');
        Route::post('create', 'BookingController@create');
    });

    Route::get('ping', 'PingController@index');
});
