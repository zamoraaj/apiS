<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EspaniolController;
use App\Http\Controllers\API\GarifunaController;
use App\Http\Controllers\API\LenguaController;
use App\Http\Controllers\API\MayagnaController;
use App\Http\Controllers\API\MiskitoController;
use App\Http\Controllers\API\UlwaController;
use App\Http\Controllers\API\RamaController;
use App\Http\Controllers\API\MestizoController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('mestizos', [MestizoController::class, 'index']); //mostrar todas las palabras
// Route::post('mestizos', [MestizoController::class, 'store']); //mostrar todas las palabras
// Route::put('mestizos', [MestizoController::class, 'update']); //actualizar las palabras
// Route::delete('mestizos', [MestizoController::class, 'destroy']);//eliminar y actualizar las palabras





Route::get('garifunas', [GarifunaController::class, 'index']);





Route::get('lenguas', [LenguaController::class, 'index']);
Route::get('mayagnas', [MayagnaController::class, 'index']);
Route::get('miskitos', [MiskitoController::class, 'index']);
Route::get('ramas', [RamaController::class, 'index']);
Route::get('ulwas', [UlwaController::class, 'index']);