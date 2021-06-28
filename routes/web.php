<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/acercade', 'AcercadeController@index')->name('acercade');
Route::get('/recuperar', 'Auth\ResetPasswordController@index')->name('recuperar');

//paciente
Route::get('/registroPaciente', 'Registro_pacienteController@crear')->name('registroPaciente');
Route::post('/registroPaciente/crear', 'Registro_pacienteController@store')->name('registroPaciente.crear');
Route::get('/listaDepartamentos', 'Registro_pacienteController@seleccionar')->name('listaDepartamentos');
Route::get('/listaPaciente', 'Lista_pacienteController@index')->name('listaPaciente');
Route::get('/registroEnfermedades', 'RegistroPacienteController@index')->name('listaph');


Route::get('/ini', 'Registro_paiseController@crear')->name('ln.index');
Route::post('/registro', 'Registro_paiseController@store')->name('registros');
//----------------------------------usuarios---------------------------------------------------//
Route::get('usuarios',[UserController::class,'index'])->name('usuario.index');
Route::get('usuarios/{id}/editar',[UserController::class,'editar'])->name('usuario.editar');
Route::get('/registro','UserController@create')->name('registro.crear');
Route::post('usuarios/{id}/editar',[UserController::class,'update'])->name('usuario.update');

