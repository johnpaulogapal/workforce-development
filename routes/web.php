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

// [Start] - Authentication
Route::get('/login', 'AuthController@index')->middleware('guest')->name('login');
Route::post('/authenticate', 'AuthController@authenticate')->middleware('guest');
Route::post('/logout', 'AuthController@logout')->name('logout');
// [End] - Authentication

// [Start] - Dashboard Home
Route::get('/', function () {
    return view('main.dashboard');
})->middleware('auth');
// [End] - Dashboard Home

// [Start] - Programs
Route::group(['middleware' => ['auth']], function () {
    Route::get('/programs', 'ProgramController@index')->name('programs.index');
    Route::get('/programs/create', 'ProgramController@create')->name('programs.create');
    Route::post('/programs/store', 'ProgramController@store')->name('programs.store');
    Route::get('/program/edit/{program}', 'ProgramController@edit')->name('programs.edit');
    Route::put('/program/update/{program}', 'ProgramController@update')->name('programs.update');
    Route::delete('/program/destroy/{program}', 'ProgramController@destroy')->name('programs.destroy');
});
// [End] - Programs

// [Start] - Subjects
Route::group(['middleware' => ['auth']], function () {
    Route::get('/program/{program}/subjects', 'SubjectController@index')->name('subjects.index');
    Route::get('/program/{program}/subject/create', 'SubjectController@create')->name('subjects.create');
    Route::post('/program/subject/create', 'SubjectController@store')->name('subjects.store');
    Route::get('/program/subject/edit/{subject}', 'SubjectController@edit')->name('subjects.edit');
    Route::put('/program/subject/update/{subject}', 'SubjectController@update')->name('subjects.update');
    Route::delete('/program/subject/destroy/{subject}', 'SubjectController@destroy')->name('subjects.destroy');
});
// [End] - Subjects


