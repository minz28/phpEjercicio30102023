<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
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
Route::controller(CategoriaController::class)->prefix('categoria')->group(function(){
    Route::get("/", 'index');
    Route::get("/insertar", 'create');
    Route::post("/insertar", 'store');
});
Route::controller(ProductoController::class)->prefix('producto')->group(function(){
    Route::get("/", 'index');
});