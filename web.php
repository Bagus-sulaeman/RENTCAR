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

Route::get('/', 'TambahController@index');
Route::post('/', 'TambahController@tambah');
Route::get('/syarat', function () {
    return view('syarat');
});
Route::get('/daftar', 'RenterController@index');


