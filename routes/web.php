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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/owner/register', function () {
    return view('auth/owner_register');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::po('/addroom', 'DashboardController@store')->name('addroom');
Route::resource('/rooms', 'DashboardController');
