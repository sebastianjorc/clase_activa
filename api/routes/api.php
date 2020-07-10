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

/*AQUÍ HACER UNA RUTA CON FUNCION Y EVALUAR UN IF EL TIPO DE USUARIO.
AL PARECER DEBIERA SER POSIBLE*/



//Route::resource('/academic_levels',  'AcademicLevelController');
Route::resource('/asignatures', 'AsignatureController');
Route::get('asignatures/getlist', 'AsignatureController@getlist');
Route::apiResource('academic_levels', 'AcademicLevelController');

Route::post('auth/login', 'AuthController@login');
Route::post('auth/register', 'AuthController@register');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('auth/logout', 'AuthController@logout');
    Route::get('auth/details', 'AuthController@details');

    Route::resource('users',            'UserController');
    Route::resource('parts',            'PartController');
    Route::resource('notes',            'NoteController');
    Route::resource('academic_levels',  'AcademicLevelController');
    Route::resource('asignatures',      'AsignatureController');
});
