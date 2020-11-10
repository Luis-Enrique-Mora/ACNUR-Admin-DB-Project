<?php

use App\Http\Controllers\CuotasController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\TipoVoluntarioController;
use App\Http\Controllers\VoluntariosController;
use App\Http\Controllers\EnviosController;
use App\Http\Controllers\VoluntariosAController;
use App\Http\Controllers\VoluntariosHController;
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
    return view('welcome');
});

Route::get('/cuotas', [CuotasController::class, 'index']);
Route::get('/sedes', [SedesController::class, 'index']);
Route::get('/socios', [SociosController::class, 'index']);
Route::get('/agregarSocio', [SociosController::class, 'createView']);
Route::post('/agregarSocio/add', [SociosController::class, 'store']);
Route::post('/cuota/add', [CuotasController::class, 'store']);
Route::post('/sede/add', [SedesController::class, 'store']);
Route::get('/agregarCuota', function () {
    return view('agregarCuota');
});
Route::delete('socio/delete/{id}', [SociosController::class, 'destroy']);
Route::delete('cuota/delete/{id}', [CuotasController::class, 'destroy']);
Route::delete('sede/delete/{id}', [SedesController::class, 'destroy']);
Route::get('/socio/edit/{id}', [SociosController::class, 'edit']);
Route::post('socio/update/{id}', [SociosController::class, 'update']);

Route::get('/agregarSede', function () {
    return view('agregarSede');
});

/*
    VOLUNTARIOS
*/
Route::get('/agregarVoluntario', function () {
    return view('agregarVoluntario');
});
<<<<<<< HEAD
Route::post('/voluntarios/add', [VoluntariosController::class, 'store']); 
Route::get('/voluntarios', [VoluntariosController::class, 'index']); 
Route::get('voluntarios/edit/{id}', [VoluntariosController::class, 'edit']); 
Route::post('voluntarios/edit/{id}', [VoluntariosController::class, 'update']); 
Route::delete('voluntarios/{id}', [VoluntariosController::class, 'destroy']); 
=======
>>>>>>> 069d233a2809551e1d739ae24a8c016bbf005aa3

Route::get('/agregarVoluntario', [VoluntariosController::class, 'createView']);
Route::get('/voluntarios', [VoluntariosController::class, 'index']);
Route::post('/agregarVoluntario/add', [VoluntariosController::class, 'store']); 
Route::get('/voluntario/edit/{id}', [VoluntariosController::class, 'edit']); 
Route::post('voluntario/update/{id}', [VoluntariosController::class, 'update']); 
Route::delete('voluntario/delete/{id}', [VoluntariosController::class, 'destroy']); 

/*
    VOLUNTARIOS ADMINISTRATIVOS
*/
Route::get('/agregarVoluntarioA', function () {
    return view('agregarVoluntarioA');
});

Route::get('/agregarVoluntarioA', [VoluntariosAController::class, 'createView']);
Route::get('/voluntariosA', [VoluntariosAController::class, 'index']);
Route::post('/agregarVoluntarioA/add', [VoluntariosAController::class, 'store']); 
Route::get('/voluntarioA/edit/{id}', [VoluntariosAController::class, 'edit']); 
Route::post('voluntarioA/update/{id}', [VoluntariosAController::class, 'update']); 
Route::delete('voluntarioA/delete/{id}', [VoluntariosAController::class, 'destroy']); 

/*
    VOLUNTARIOS HUMANITARIOS
*/
Route::get('/agregarVoluntarioH', function () {
    return view('agregarVoluntarioH');
});

Route::get('/agregarVoluntarioH', [VoluntariosHController::class, 'createView']);
Route::get('/voluntariosH', [VoluntariosHController::class, 'index']);
Route::post('/agregarVoluntarioH/add', [VoluntariosHController::class, 'store']); 
Route::get('/voluntarioH/edit/{id}', [VoluntariosHController::class, 'edit']); 
Route::post('voluntarioH/update/{id}', [VoluntariosHController::class, 'update']); 
Route::delete('voluntarioH/delete/{id}', [VoluntariosHController::class, 'destroy']); 


/*

<<<<<<< HEAD
Route::get('/tipo/envios', [EnviosController::class, 'tipoEnvio']); 
Route::get('/crear/tipo/envios/', [EnviosController::class, 'createTipoEnv']); 
Route::post('/crear/tipo/envio', [EnviosController::class, 'crearTipoEnvio']); 
Route::get('/editar/tipo/envio/{id}', [EnviosController::class, 'editarTipoEnv']); 
Route::get('/editar/tipo/envio', [EnviosController::class, 'actualizarTipoEnvio']); 
Route::get('/eliminar/tipo/envio/{id}', [EnviosController::class, 'eliminarTipoEnvio']); 

Route::get('/lista/productos', [EnviosController::class, 'listarProductos']); 
Route::get('/crear/productos', [EnviosController::class, 'crearProductos']); 
Route::post('/agregar/productos', [EnviosController::class, 'agregarProducto']); 
Route::get('/editar/producto/{id}', [EnviosController::class, 'editarProducto']); 
Route::get('/editar/producto', [EnviosController::class, 'actualizarProducto']); 
Route::get('/eliminar/producto/{id}', [EnviosController::class, 'eliminarProducto']); 
<<<<<<< HEAD
Route::get('/lista/envios', [EnviosController::class, 'listarEnvios']); 

Route::get('/crear/envio', [EnviosController::class, 'crearAyuda']); 

Route::post('/agregar/envio', [EnviosController::class, 'agregarEnvio']); 

Route::get('/crear/datos/envio', [EnviosController::class, 'datosEnvio']); 
=======
=======

<<<<<<< HEAD



=======

>>>>>>> ceceaa5b2683b7e086860b813cfc5394971150b1
>>>>>>> 92f0ed2b47b961af1c1993372a3680ea6388607e
*/
>>>>>>> 069d233a2809551e1d739ae24a8c016bbf005aa3
