<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/dashboard');
    } else {
        return redirect('/welcome');
    }
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard")->middleware('auth');

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/create_subject', [SubjectController::class, 'createIndex']);
Route::post('/create_subject', [SubjectController::class, 'store']);
Route::post('/join_subject', [SubjectController::class, 'join']);