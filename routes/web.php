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

Route::get('/','FrontEndController@index');
Route::get('admin','FrontEndController@admin');

/*
Route::get('index', function () {
    return view('index');
});
*/
Route::resource('usuario','UsuarioController');

Route::resource('login','LoginController');

Route::resource('faseuno', 'ArchiUnoController');
Route::resource('fasedos', 'ArchiDosController');