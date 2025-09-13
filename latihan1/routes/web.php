<?php

use App\Http\Controllers\kelasController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World dari Laravel';
});

Route::get('/nama', function () {
    return 'Hello nama saya Yusrina';
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);

Route::get('/kelas', [kelasController::class, 'index']);
Route::post('/kelas', [kelasController::class, 'store']);


