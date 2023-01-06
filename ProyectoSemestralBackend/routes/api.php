<?php

use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\CentroDistribucionController;
use App\Http\Controllers\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/farmacia')->group(function () use ($router) {
    $router->post('/crearFarmacia', [FarmaciaController::class, 'crearFarmacia']);
    $router->get('/verFarmacia', [FarmaciaController::class, 'verFarmacia']);
    $router->post('/actualizarFarmacia', [FarmaciaController::class, 'actualizarFarmacia']);
    $router->post('/eliminarFarmacia', [FarmaciaController::class, 'eliminarFarmacia']);
});

Route::prefix('/medicamento')->group(function () use ($router) {
    $router->post('/crearMedicamento', [MedicamentoController::class, 'crearMedicamento']);
    $router->get('/verMedicamento', [MedicamentoController::class, 'verMedicamento']);
    $router->post('/actualizarMedicamento', [MedicamentoController::class, 'actualizarMedicamento']);
    $router->post('/eliminarMedicamento', [MedicamentoController::class, 'eliminarMedicamento']);
});

Route::prefix('/centro')->group(function () use ($router) {
    $router->post('/crearCentro', [CentroDistribucionController::class, 'crearCentro']);
    $router->get('/verCentro', [CentroDistribucionController::class, 'verCentro']);
    $router->post('/actualizarCentro', [CentroDistribucionController::class, 'actualizarCentro']);
    $router->post('/eliminarCentro', [CentroDistribucionController::class, 'eliminarCentro']);
});

Route::prefix('/stock')->group(function () use ($router) {
    $router->post('/crearStock', [StockController::class, 'crearStock']);
    $router->get('/verStock', [StockController::class, 'verStock']);
    $router->post('/actualizarStock', [StockController::class, 'actualizarStock']);
    $router->post('/eliminarStock', [StockController::class, 'eliminarStock']);
});

