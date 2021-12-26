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
    return redirect('login');
});
//---------------Home----------
Route::name('index')->get('/index','IndexController@index');
Route::name('indexadmin')->get('/indexadmin','IndexController@indexadmin');
Route::name('tours')->get('/tours','IndexController@tours');
Route::name('hotels')->get('/hotels','IndexController@hotels');
Route::name('services')->get('/services','IndexController@services');
Route::name('about')->get('/about','IndexController@about');
Route::name('blog')->get('/blog','IndexController@blog');
Route::name('contact')->get('/contact','IndexController@contact');
Route::name('login')->get('/login','IndexController@login');
Route::get('usuarios/valida', 'UsuarioController@valida')->name('valida');
//--------------------------

Route::resource('alquiler', 'AlquilerController');
Route::resource('cliente', 'ClienteController');
Route::resource('crucero', 'CruceroController');
Route::resource('hotel', 'HotelController');
Route::resource('usuario', 'UsuarioController');
Route::resource('vuelo', 'VueloController');

Route::get('alquileres/pdf', 'AlquilerController@pdf');
Route::get('alquileres/excel', 'AlquilerController@excel');

Route::get('clientes/pdf', 'ClienteController@pdf');
Route::get('clientes/excel', 'ClienteController@excel');

Route::get('cruceros/pdf', 'CruceroController@pdf');
Route::get('cruceros/excel', 'CruceroController@excel');

Route::get('hoteles/pdf', 'HotelController@pdf');
Route::get('hoteles/excel', 'HotelController@excel');

Route::get('usuarios/pdf', 'UsuarioController@pdf');
Route::get('usuarios/excel', 'UsuarioController@excel');

Route::get('vuelos/pdf', 'VueloController@pdf');
Route::get('vuelos/excel', 'VueloController@excel');

Route::get('recover/{id}', 'UsuarioController@recover');
Route::post('password/{id}', 'UsuarioController@password');
Route::get('recoverpass', 'UsuarioController@recoverpass');
Route::post('enviocorreo', 'UsuarioController@enviocorreo');