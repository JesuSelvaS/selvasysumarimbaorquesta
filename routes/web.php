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
    return view('cliente.inicio');
});

Route::resource('menu','menuController');
Route::resource('actividad1','actividad1Controller');
Route::resource('actividad2','actividad2Controller');
Route::resource('actividad3','actividad3Controller');
Route::resource('actividad4','actividad4Controller');
Route::get('addPost','actividad4Controller@addPost');
Route::get('removePost','actividad4Controller@removePost');
Route::get('editPost','actividad4Controller@editPost');