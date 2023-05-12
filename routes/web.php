<?php

use App\Http\Controllers\InforController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssociadoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\SimuladorController;
use App\Http\Controllers\AutorizacaoController;
use App\Http\Controllers\ArmaController;

//Route::group(['middleware' => 'auth'], function () {});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [AssociadoController::class, 'store'])->name('login');
Route::get('/infor', [InforController::class, 'infor'])->name('infor');
Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');
Route::get('/simulador/{id}', [SimuladorController::class, 'show'])->name('simulador');
Route::get('/detalhe/{id}', [ArmaController::class, 'index'])->name('detalhe');
Route::get('/autorizacao', [AutorizacaoController::class, 'index'])->name('autorizacao');
