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

Route::post('/login', 'AuthController@apiLogin')->name('api-login');
Route::post('/register', 'AuthController@register')->name('api-register');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout')->name('api-logout');

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1', 'namespace' => 'Api', 'as' => 'api.v1.'], function () {

    Route::resource('balance', 'BalanceController');

});
