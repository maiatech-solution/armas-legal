<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssociadoController;
use App\Http\Controllers\CatalogoController;

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
Route::post('/login', [AssociadoController::class, 'store'])->name('login');
Route::get('/infor', [InforController::class, 'infor'])->name('infor');
Route::get('/catalogo', [HomeController::class, 'store'])->name('catalogo');
