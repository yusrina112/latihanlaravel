<?php

use App\Http\Controllers\kelasController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

    // Matakuliah
    Route::get('/matakuliah', [matakuliahController::class, 'index'])->name('matakuliah.index');
    Route::post('/matakuliah', [matakuliahController::class, 'store'])->name('matakuliah.store');

    // Kelas
    Route::get('/kelas', [kelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas', [kelasController::class, 'store'])->name('kelas.store');
    

});

require __DIR__.'/auth.php';
