<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

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

    Route::controller(TeacherController::class)->prefix('teachers')->group(function () {
        Route::get('', 'index')->name('teachers');
        Route::get('create', 'create')->name('teachers.create');
        Route::post('store', 'store')->name('teachers.store');
        Route::get('show/{id}', 'show')->name('teachers.show');
        Route::get('edit/{id}', 'edit')->name('teachers.edit');
        Route::put('edit/{id}', 'update')->name('teachers.update');
        Route::delete('destroy/{id}', 'destroy')->name('teachers.destroy');
    });

    Route::controller(CourseController::class)->prefix('courses')->group(function () {
        Route::get('', 'index')->name('courses.index');
        Route::get('create', 'create')->name('courses.create');
        Route::post('store', 'store')->name('courses.store');
        Route::get('show/{id}', 'show')->name('courses.show');
        Route::get('edit/{id}', 'edit')->name('courses.edit');
        Route::put('edit/{id}', 'update')->name('courses.update');
        Route::delete('destroy/{id}', 'destroy')->name('courses.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::post('/profile/update', [AuthController::class, 'profileUpdate'])->name('profile.update');