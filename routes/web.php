<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

// tampilkan form tambah kelas
Route::get('/kelas/create', [KelasController::class, 'create']);

// simpan data kelas
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
