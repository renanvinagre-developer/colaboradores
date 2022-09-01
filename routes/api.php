<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController as ColaboradorController;
use App\Http\Controllers\SalarioController as SalarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group.
|
*/

// List employees
Route::get('colaboradores', [ColaboradorController::class, 'index']);

// List a single employee
Route::get('colaborador/{id}', [ColaboradorController::class, 'show']);

// Create a new employee
Route::post('colaborador', [ColaboradorController::class, 'store']);

// Update a employee
Route::put('colaborador/{id}', [ColaboradorController::class, 'update']);

// Delete a employee
Route::delete('colaborador/{id}', [ColaboradorController::class,'destroy']);

// Create a new salary
Route::post('colaborador/{id}/salario', [SalarioController::class, 'store']);