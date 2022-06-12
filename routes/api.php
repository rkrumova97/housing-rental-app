<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VacationController;
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

Route::prefix('/person')->group(function () {
    Route::get('/', [PersonController::class, 'getAll']);
    Route::post('/sendInterviewInvite', [PersonController::class, 'sendMail']);
    Route::post('/', [PersonController::class, 'store']);
    Route::delete('/{id}', [PersonController::class, 'destroy']);
    Route::get('/{id}', [PersonController::class, 'get']);
    Route::put('/{id}', [PersonController::class, 'update']);
});

Route::prefix('/employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'getAll']);
    Route::get('/archive', [EmployeeController::class, 'archive']);
    Route::post('/', [EmployeeController::class, 'store']);
    Route::delete('/{id}', [EmployeeController::class, 'destroy']);
    Route::get('/{id}', [EmployeeController::class, 'get']);
    Route::put('/{id}', [EmployeeController::class, 'update']);
});

Route::prefix('/project')->group(function () {
    Route::get('/', [ProjectController::class, 'getAll']);
    Route::post('/', [ProjectController::class, 'store']);
    Route::delete('/{id}', [ProjectController::class, 'destroy']);
    Route::get('/{id}', [ProjectController::class, 'get']);
    Route::put('/{id}', [ProjectController::class, 'update']);
});

Route::prefix('/position')->group(function () {
    Route::get('/', [PositionController::class, 'getAll']);
    Route::post('/', [PositionController::class, 'store']);
    Route::delete('/{id}', [PositionController::class, 'destroy']);
    Route::get('/{id}', [PositionController::class, 'get']);
    Route::put('/{id}', [PositionController::class, 'update']);
});

Route::prefix('/vacation')->group(function () {
    Route::get('/', [VacationController::class, 'getAll']);
    Route::post('/', [VacationController::class, 'store']);
    Route::delete('/{id}', [VacationController::class, 'destroy']);
    Route::get('/{id}', [VacationController::class, 'get']);
    Route::put('/{id}', [VacationController::class, 'update']);
});
