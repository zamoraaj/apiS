<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EspaniolController;
use App\Http\Controllers\API\GarifunaController;
use App\Http\Controllers\API\LenguaEtnicaController;
use App\Http\Controllers\API\MayagnaController;
use App\Http\Controllers\API\MiskitoController;
use App\Http\Controllers\API\UlwaController;
use App\Http\Controllers\API\RamaController;


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


Route::get('espaniols', [EspaniolController::class, 'index']);
Route::get('garifunas', [GarifunaController::class, 'index']);
Route::get('lenguaEtnicas', [LenguaEtnicaController::class, 'index']);
Route::get('mayagnas', [MayagnaController::class, 'index']);
Route::get('miskitos', [MiskitoController::class, 'index']);
Route::get('ramas', [RamaController::class, 'index']);
Route::get('ulwas', [UlwaController::class, 'index']);