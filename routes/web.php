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

use App\Htp\Controllers\MyRoomsController;

Route::get('/', 'MyRoomsController@usersRooms');
Route::get('/Sortroom', 'MyRoomsController@RoomsSort')->name('Sortroom');
Route::get('/roomDetails', 'MyRoomsController@roomDetails')->name('roomDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/owner/register', function () {
    return view('auth/owner_register');
});
Route::get('my/bookings', 'OwnerBookings@ownerbookings');


//Route::po('/addroom', 'DashboardController@store')->name('addroom');
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/success', function () {
//     return view('rooms/roomadded');
// });

Route::resource('/rooms', 'RoomController');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/my-rooms', 'MyRoomsController@index');
Route::Post('/dashboard', 'DashboardController@show')->name('dashboard');



Route::resource('/orders', 'OrdersController');
Route::get('/Bookings', 'OrdersController@index')->name('Bookings');
