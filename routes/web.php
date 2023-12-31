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

// Route::get('/usuarios', function(){
//     return view('usuarios');
// })->name('usuarios');

Route::resource('usuarios','UsuariosController'); // Para registrar todos los metodos
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');
Route::apiResource('apiusuarios','ApiUsuariosController'); // Para registrar todos los metodos