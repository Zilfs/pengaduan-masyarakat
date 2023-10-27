<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/sign-up', [AuthController::class, 'add'])->name('sign-up');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/index', [MasyarakatController::class, 'index'])->name('masyarakat-index');