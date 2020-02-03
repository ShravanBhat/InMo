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

Route::get('/adminhome', function () {
    return view('admin.home');
});
// Route::get('/adhome', function () {
//     return view('admin.adhome');
// });
Route::get('/adhome', 'DashboardController@index');

Route::get('/gallery', function () {
    return view('admin.gallery');
});
Route::get('/inmo', function () {
    return view('inmo');
});
Route::get('/systemno', function () {
    return view('admin.systemno');
});

Route::get('/sensor', function () {
});
Route::get('/map', function () {
    return view('admin.map');
});
Route::get('/users', 'UserController@index');
Route::get('/sensor', 'SensorController@index');
Route::get('/sensorvalues', 'SensorController@sensorvalues');

Route::get('changeStatus', 'SensorController@changeStatus');
Auth::Routes();