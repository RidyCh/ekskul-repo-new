<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AnggotaController;

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

Route::get('/', [Controller::class, 'web']);

// dashboard-admin
Route::get('/dashboard', [Controller::class, 'index']);

// route authentification
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/auth', [Controller::class, 'Auth']);
Route::post('/logout', [Controller::class, 'logout']);

// route anggota
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::post('/tambah-anggota', [AnggotaController::class, 'store']);
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('editA');
Route::post('/anggota/{id}', [AnggotaController::class, 'update']);
Route::delete('/hapus-anggota/{id}', [AnggotaController::class, 'destroy']);

// route jadwal
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::post('/tambah-jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('editJ');
Route::post('/jadwal/{id}', [JadwalController::class, 'update']);
Route::delete('/hapus-jadwal/{id}', [JadwalController::class, 'destroy']);
