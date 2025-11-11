<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', data: ['nama' => 'Afnan Yazid Pradana']);
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');