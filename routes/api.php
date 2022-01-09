<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentsController;
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

Route::post('register', [AuthController::class, 'register']);


Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('classes', [ClassesController::class, 'api_classes']);
    Route::patch('classes', [ClassesController::class, 'api_update']);
    Route::delete('classes', [ClassesController::class, 'api_delete']);
    Route::get('students', [StudentsController::class, 'api_students']);
    Route::patch('students', [StudentsController::class, 'api_update']);
    Route::delete('students', [StudentsController::class, 'api_delete']);
});
