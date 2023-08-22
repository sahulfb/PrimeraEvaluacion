<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\RolesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('getDatosToken', [AuthController::class, 'getDatosToken']);
    Route::post('validarToken', [AuthController::class, 'validarToken']);
    Route::post('logout', [AuthController::class, 'logout']);
    // Route::post('register', [AuthController::class, 'register']);
    Route::post('roles', [RolesController::class, 'index']);
    Route::post('roles/create', [RolesController::class, 'store']);
    Route::post('roles/update/{id}', [RolesController::class, 'update']);
    Route::post('roles/delete/{id}', [RolesController::class, 'destroy']);
    Route::post('roles/asignar/{rol}/user/{user}', [RolesController::class, 'asignar']);

    Route::post('create', [RegisterController::class, 'store']);
    Route::post('update', [RegisterController::class, 'update']);
    Route::post('delete', [RegisterController::class, 'delete']);

    Route::post('login', [AuthController::class, 'login']);
});
