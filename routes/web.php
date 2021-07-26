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

Route::get('/admin', 'Admin\AdminController@index')->name('admin.dashboard');
Route::get('/data_container', 'Admin\AdminController@data_container')->name('admin.data_container');
Route::get('/data_kapal', 'Admin\AdminController@data_kapal')->name('admin.data_kapal');