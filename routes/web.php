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
    return view('login.bienvenida');
});
Route::get('/prueba', function () {
    return view('layouts.formulario');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//ruta inicio
Route::get('/inicio', 'InicioController@index')->name('login.index');
Route::get('/registro', 'UserController@create')->name('registro.crear');
Route::get('/acercade', 'AcercadeController@index')->name('acercade');
Route::get('/recuperar', 'Auth\ResetPasswordController@index')->name('recuperar');

//paciente
Route::get('/registroPaciente', 'RegistroPacienteController@crear')->name('registroPaciente');
Route::get('/listaDepartamentos', 'RegistroPacienteController@seleccionar')->name('listaDepartamentos');
Route::get('/listaPaciente', 'RegistroPacienteController@index')->name('listaPaciente');
Route::get('/registroEnfermedades', 'RegistroPacienteController@index')->name('listaph');

