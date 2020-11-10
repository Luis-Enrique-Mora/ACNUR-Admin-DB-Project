<?php

use App\Http\Controllers\CuotasController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\VoluntariosController;
use App\Http\Controllers\EnviosController;

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

Route::get('/agregarSede', function () {
    return view('agregarSede');
});

Route::get('voluntarios/add', [VoluntariosController::class, 'create']); 
Route::post('voluntarios/add', [VoluntariosController::class, 'store']); 
Route::get('/voluntarios', [VoluntariosController::class, 'index']); 
Route::get('voluntarios/edit/{id}', [VoluntariosController::class, 'edit']); 
Route::post('voluntarios/edit/{id}', [VoluntariosController::class, 'update']); 
Route::delete('voluntarios/{id}', [VoluntariosController::class, 'destroy']); 

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
