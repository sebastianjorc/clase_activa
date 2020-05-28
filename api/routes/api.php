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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::post('auth/login', 'AuthController@login');
Route::post('auth/register', 'AuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('auth/logout', 'AuthController@logout');
    Route::get('auth/details', 'AuthController@details');
    
    Route::resource('users', 'UserController');
    Route::resource('vehicles', 'VehicleController');
    Route::resource('parts', 'PartController');
    Route::resource('notes', 'NoteController');

    // Route::get('vehicle', 'VehicleController@index');
    // Route::get('vehicle/{vehicle}', 'VehicleController@show');
    // Route::post('vehicle', 'VehicleController@store');
    // Route::put('vehicle/{vehicle}', 'VehicleController@update');
    // Route::delete('vehicle', 'VehicleController@destroy');
});


