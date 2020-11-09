<?php

use App\Http\Controllers\CuotasController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\SociosController;
use App\Http\Controllers\VoluntariosController;
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

Route::get('voluntarios/add', [VoluntariosController::class, 'create']); 
Route::post('voluntarios/add', [VoluntariosController::class, 'store']); 
Route::get('/voluntarios', [VoluntariosController::class, 'index']); 
Route::get('voluntarios/edit/{id}', [VoluntariosController::class, 'edit']); 
Route::post('voluntarios/edit/{id}', [VoluntariosController::class, 'update']); 
Route::delete('voluntarios/{id}', [VoluntariosController::class, 'destroy']); 