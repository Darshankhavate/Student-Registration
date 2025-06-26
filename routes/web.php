<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('student', 'create-student');
Route::post('create-student',[StudentController::class , 'create']);
Route::get('display', [StudentController::class, 'display']);
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'update']);
Route::put('update/{id}', [StudentController::class, 'updateData']);
Route::get('search', [StudentController::class, 'search']);

