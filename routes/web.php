<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main.dashboard');
})->middleware('auth');

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/authenticate', 'AuthController@authenticate');
Route::post('/logout', 'AuthController@logout');