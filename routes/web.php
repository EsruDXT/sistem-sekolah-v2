<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
// Manajemen Siswa

Route::name('students.')->prefix('/students')->group(function () {
    Route::get('/', StudentController::class, 'index')->name('index');

    Route::get('/{id}', StudentController::class, 'show')->name('show');
});
