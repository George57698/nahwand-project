<?php

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



Auth::routes();
  
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses', [App\Http\Controllers\courseController::class, 'index'])->name('courses');
Route::get('/note', [App\Http\Controllers\noteController::class, 'index'])->name('note');
Route::get('/teacher', [App\Http\Controllers\teacherController::class, 'index'])->name('teacher');
Route::get('/singleteacher', [App\Http\Controllers\singleController::class, 'index'])->name('singleteacher');
Route::get('/singlenote', [App\Http\Controllers\singlenoteController::class, 'index'])->name('singlenote');

Route::get('/tuner', [App\Http\Controllers\tunerController::class, 'index'])->name('tuner');
Route::get('/add-course', [App\Http\Controllers\courseController::class, 'add'])->name('add-course');
Route::post('/course-added', [App\Http\Controllers\courseController::class, 'add_new'])->name('course-added');
Route::get('/store', [App\Http\Controllers\storeController::class, 'index'])->name('store');
Route::get('/single_instrument', [App\Http\Controllers\storeController::class, 'single_instrument'])->name('single_instrument');


Route::get('/book_instrument', [App\Http\Controllers\courseController::class, 'book_instrument'])->name('book_instrument');


//dashboard
Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/note', [App\Http\Controllers\dashboardController::class, 'note'])->name('dashboard_course');

Route::get('/dashboard/teacher', [App\Http\Controllers\dashboardController::class, 'teacher'])->name('dashboard_teacher');





