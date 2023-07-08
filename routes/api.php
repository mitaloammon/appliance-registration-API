<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplianceController;

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



Route::get('/appliance', [ApplianceController::class, 'index']);
Route::post('/appliance', [ApplianceController::class, 'store']);
Route::get('/appliance', [ApplianceController::class, 'show']);
Route::put('/update/{id}', [ApplianceController::class, 'update']);
Route::delete('appliance/{id}', [ApplianceController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
