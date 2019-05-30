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




//Route::get('/Mascotas', 'MascotaController@index');
//Route::get('/Mascotas/create','MascotaController@create');
Route::resource('Mascotas', 'MascotasController');
Route::resource('especialistas', 'EspecialistasController')->middleware('auth');
Route::resource('clientes', 'ClientesController');
Route::resource('documentos', 'DocumentosController');
Route::resource('rips', 'RipsController');
Route::resource('recetarios', 'RecetariosController');

//Calendario vistas//
Route::resource('events', 'EventController');
Route::get('/addeventURL', 'EventController@display');
Route::get('/displaydataURL','EventController@show');
Route::get('/deleteeventURL','EventController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
