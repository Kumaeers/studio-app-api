<?php

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

Route::get('health-check', 'HealthCheckController');

Route::group(['namespace' => 'Manager', 'prefix' => 'manager', 'as' => 'manager.'], function () {
    Route::post('login', 'AuthController@login')->name('login');
});