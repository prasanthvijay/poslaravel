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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customer', 'CustomerController@index')->name('customer');

Route::post('/customerForm/{formtype}','FormsController@customerForm');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('showroom', 'Admin\ShowroomController@index');

Route::post('showroom/store', 'Admin\ShowroomController@store');

Route::patch('showroom/update/{id}', 'Admin\ShowroomController@update');

Route::post('/showroomForm/{formtype}','FormsController@showroomForm');
