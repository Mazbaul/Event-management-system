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


Route::get('/', 'HomeController@index');
Route::get('/admin/createevent', 'AdminController@index')->name('createevent');
Route::post('/admin/createevent', 'AdminController@store')->name('createevent.store');


Route::get('/reserve/{eventid}/{seat}/{type}', 'ReservationController@reserve')->name('bookseat');
Route::post('/reserve/booking', 'ReservationController@store')->name('bookseat.store');
Route::resource('/hallmaps', 'HallmapController');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

      Route::get('/home', function () {
           return view('adminlte::home')->withEvents($events=App\Event::orderBy('id', 'desc')->paginate(3));
        })->name('welcome');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();
