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

Route::get('classes/grade_query',['uses'=>'App\Http\Controllers\ClassesController@grade_query','as'=>'classes.grade_query']);
Route::get('students/grade_query',['uses'=>'App\Http\Controllers\StudentsController@grade_query','as'=>'students.grade_query']);
Route::resource('students',StudentsController::class);
Route::resource('classes',ClassesController::class);
