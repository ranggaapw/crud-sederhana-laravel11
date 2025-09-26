<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ROOT → arahkan ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// CRUD SISWA → wajib login
Route::middleware('auth')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');
    Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
    Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
    Route::get('/siswa/edit{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('/siswa/update{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::post('/siswa/delete{id}', [SiswaController::class, 'delete'])->name('siswa.delete');
});
