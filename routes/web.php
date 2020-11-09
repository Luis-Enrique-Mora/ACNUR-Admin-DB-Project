<?php

use App\Http\Controllers\CuotasController;
use App\Http\Controllers\SedesController;
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