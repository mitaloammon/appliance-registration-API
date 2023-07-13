<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EletrodomesticoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/eletrodomestico', [EletrodomesticoController::class, 'store']);
Route::get('/eletrodomestico', [EletrodomesticoController::class, 'index']);

Route::put('/eletrodomestico/alterar/{id}', [EletrodomesticoController::class, 'update']);
Route::delete('/eletrodomestico/{id}', [EletrodomesticoController::class, 'destroy']);
