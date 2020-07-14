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
    return view('welcome');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/mongodb', function () {
    return view('mongodb');
});

Route::get('/vehiculos', function () {
    return view('vehiculos');
});

//Admin.Vehicles Route

Route::get('/admin/vehicles', 'VehicleController@Index')->name('Index');
    
Route::get('/admin/vehicles/create','VehicleController@Create');

Route::post('/admin/vehicles/create','VehicleController@Store');

Route::get('/admin/vehicles/edit/{id}', 'VehicleController@Edit');

Route::post('/admin/vehicles/edit', 'VehicleController@Update');

Route::get('/admin/vehicles/delete/{id}', 'VehicleController@Delete');

Route::delete('/admin/vehicles/delete', 'VehicleController@Remove' );

Route::get('/admin/vehicles/{id}', 'VehicleController@Show');

//ProductStore Routes
Route::get('/vehiclesmenu', 'VehicleController@VehicleStore')->name('VehicleStore');

Route::get('/products/{id}', 'ProductController@ProductDetails')->name('ProductDetails');

Route::post('/products/comment', 'ProductController@AddComment')->name('ProductComment');
