<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard.index');

Route::get('/empresas', [HomeController::class, 'empresas'])->name('empresas.home');

Route::post('/dashboard/{empresa}', [HomeController::class, 'ingresar']);


//Rutas de almacenes
Route::prefix('almacen')->group(function (){
    Route::get('/', [AlmacenController::class, 'index'])->name('almacen.index');
    Route::get('lista', [AlmacenController::class, 'almacenes']);
    Route::get('tables', [AlmacenController::class, 'tables']);
    Route::get('/{almacen}/tables', [AlmacenController::class, 'data']);
    Route::post('/', [AlmacenController::class, 'store']);
    Route::post('update', [AlmacenController::class, 'update']);
    Route::delete('/{almacen}/delete', [AlmacenController::class, 'delete']);
});

//Rutas de series
Route::prefix('serie')->group(function () {
    Route::get('cdps', [SerieController::class, 'combocdps']);
    Route::get('/{almacen}', [SerieController::class, 'lista']);
    Route::post('/', [SerieController::class, 'store']);
});
