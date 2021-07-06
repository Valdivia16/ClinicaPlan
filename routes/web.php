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

/*Route::get('/', function () {
    return view('login.bienvenida');
});
Route::get('/prueba', function () {
    return view('layouts.formulario');
});
*/
Auth::routes(['verify' => true]);

Route::get('/inicio', 'InicioController@index')->name('login.index');
Route::get('/', 'HomeController@index')->name('home');
//ruta inicio

//registro usuario

Route::get('/registro', 'RegistroUsuarioController@index')->name('registro.crear');
Route::post('/registroUser/crear', 'RegistroUsuarioController@store')->name('registroUser.crear');
Route::get('/perfil', 'RegistroUsuarioController@index')->name('perfil');
Route::put('/editarPerfil/editar', 'RegistroUsuarioController@edit')->name('editarPerfil');
Route::get('/perfil/editado', 'RegistroUsuarioController@indexEditar')->name('perfilEditado');



Route::get('/registro', 'UserController@create')->name('registro.crear');
Route::get('/acercade', 'AcercadeController@index')->name('acercade');
Route::get('/recuperar', 'Auth\ResetPasswordController@index')->name('recuperar');

//paciente
Route::get('/registroPaciente', 'Registro_pacienteController@crear')->name('registroPaciente');
//guarda registro
Route::post('/registroPaciente/crear', 'Registro_pacienteController@store')->name('registroPaciente.crear');
Route::put('/paciente/{id}/editar', 'Registro_pacienteController@edit')->name('editarPaciente');
Route::get('/paciente/{id}/editado', 'Registro_pacienteController@indexEditar')->name('pacienteEditado');
//listar
Route::get('/mostrarPaciente/{id}/detalle', 'Registro_pacienteController@mostrar')->name('mostrarPaciente');
//eliminar
Route::delete('/paciente/{id}','Registro_pacienteController@borrarPaciente')->name("borrarPaciente");
Route::get('/paciente/editar', 'Registro_pacienteController@list')->name('listaPaciente');
Route::get('/listaDepartamentos', 'Registro_pacienteController@seleccionar')->name('listaDepartamentos');
Route::get('/registroEnfermedades', 'RegistroPacienteController@index')->name('listaph');
Route::get('/ini', 'Registro_paiseController@crear')->name('ln.index');
Route::post('/registro', 'Registro_paiseController@store')->name('registros');

//formulario dos
Route::get('/formularioDos', 'FormularioDoController@index')->name('formularioDos');
Route::get('/formularioDosBusqueda', 'FormularioDoController@busqueda')->name('formularioDosBusqueda');
Route::post('/formularioDos/crear', 'FormularioDoController@store')->name('formularioDos.crear');
Route::put('/editarformularioDos/editar', 'FormularioDoController@edit')->name('editarformularioDos');
Route::get('/formularioDosEditado/editado', 'FormularioDoController@indexEditar')->name('formularioDosEditado');
Route::delete('/borrarformularioDos','FormularioDoController@borrarEnfermedad')->name("borrarformularioDos");





//lista paciente

Route::get('/listaPaciente', 'Lista_pacienteController@index')->name('listaPaciente');

//refencia enfermedades
Route::get('/referenciaEnfermedades', 'ReferenciaEnfermedadController@index')->name('referenciaEnfermedad');
Route::get('/referenciaBusqueda', 'ReferenciaEnfermedadController@busqueda')->name('referenciaBusqueda');
Route::post('/crearReferencia/crear', 'ReferenciaEnfermedadController@store')->name('crearReferencia.crear');
Route::put('/editarReferencia/editar', 'ReferenciaEnfermedadController@edit')->name('editarReferencia');
Route::get('/referencia/editado', 'ReferenciaEnfermedadController@indexEditar')->name('referenciaEditado');
Route::delete('/borrarEnfermedad','ReferenciaEnfermedadController@borrarEnfermedad')->name("borrarEnfermedad");

//inventario
Route::get('/inventario', 'InventarioController@index')->name('inventario');




