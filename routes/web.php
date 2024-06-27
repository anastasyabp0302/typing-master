<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TypingTestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TypingController::class, 'index']);
Route::post('/typing/submit', [TypingController::class, 'submit']);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'showCoursePage']);

Route::get('/typing-test', function () {
    return view('typing-test');
});

Route::get('/typing-test', [TypingTestController::class, 'show']);