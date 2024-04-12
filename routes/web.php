<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function (){
    Route::get('dashboard', function (){
        return view('dashboard');
    })->name('dashboard');

    Route::controller(StudentController::class)->prefix('students')->group(function () {
        Route::get('', 'index')->name('students');
        Route::get('create', 'create')->name('students.create');
        Route::post('store', 'store')->name('students.store');
        Route::get('show/{id}', 'show')->name('students.show');
        Route::get('edit/{id}', 'edit')->name('students.edit');
        Route::put('edit/{id}', 'update')->name('students.update');
        Route::delete('destroy/{id}', 'destroy')->name('students.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});