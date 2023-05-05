<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssociadoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\SimuladorController;

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

//Route::group(['middleware' => 'auth'], function () {});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [AssociadoController::class, 'store'])->name('login');
Route::get('/infor', [InforController::class, 'infor'])->name('infor');
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');
Route::get('/simulador/{id}', [SimuladorController::class, 'show'])->name('simulador');

//Route::get('/simulador',[SimuladorController::class, 'index'])->name('simulador');
