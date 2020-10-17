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


Route::resource('customer', 'PelangganController');
Route::get('/create', 'PelangganController@create')->name('create');
Route::post('/customer', 'PelangganController@store');
Route::get('/pelanggans/{id}/edit', 'PelangganController@edit')->name('edit');
Route::patch('/pelanggans/{id}/update', 'PelangganController@update');
Route::delete('/pelanggans/{id}', 'PelangganController@destroy');

Route::resource('admin', 'AdminController');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/create', 'AdminController@create')->name('create');
Route::post('/admin', 'AdminController@store');
Route::get('/admins/{id}/edit', 'AdminController@edit')->name('edit');
Route::patch('/admins/{id}/update', 'AdminController@update');
Route::delete('/admins/{id}', 'AdminController@destroy');
