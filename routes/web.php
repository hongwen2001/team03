<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentsController;
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

Route::get('classes/inquire',['uses'=>'App\Http\Controllers\ClassesController@inquire_input','as'=>'classes.inquire_input']);
Route::post('classes/inquire',['uses'=>'App\Http\Controllers\ClassesController@inquire_output','as'=>'classes.inquire_output']);
Route::post('classes/student',['uses'=>'App\Http\Controllers\ClassesController@students','as'=>'classes.students']);
Route::resource('students',StudentsController::class);
Route::resource('classes',ClassesController::class);
