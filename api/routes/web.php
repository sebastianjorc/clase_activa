<?php


use Illuminate\Support\Facades\Route;
use App\User;
use App\Role;

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

//Route::view('/{any}', 'index')->where('any', '.*');
Route::view('/', 'index');

//Route::resource('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');
