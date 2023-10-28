<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PengaduanController;
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
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

//Masyarakat Area
Route::group(['middleware' => ['isMasyarakat'], 'prefix' => 'masyarakat'], function(){
    Route::get('/index', [MasyarakatController::class, 'index'])->name('masyarakat-index');
    Route::get('/buat-aduan', [PengaduanController::class, 'create'])->name('buat-aduan');
    Route::post('/kirim-aduan', [PengaduanController::class, 'store'])->name('kirim-aduan');
});
