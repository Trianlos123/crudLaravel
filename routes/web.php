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
/*directo a la vista (blade) */
Route::get('/', function () {
    return view('welcome');
});
/*localhost/crudlaravel/public/libro */
Route::resource('libro', 'LibroController');
/*localhost/crudlaravel/public/api/v1/libros */
Route::get('api/v1/libros','LibroController@getLibros');

Route::resource('estudiante', 'EstudianteController');
