<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisIkanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jenis-ikan', function () {
    return view('ikan.tambah-ikan');
});

Route::get('/jenis-kolam', function () {
    return view('kolam.tambah-kolam'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/pemanenan', function () {
    return view('pemanenan.tambah-pemanenan'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/tambah-ikan', function () {
    return view('ikan.add-item-ikan'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/add-kolam', function () {
    return view('kolam.add-kolam'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/add-pemanenan', function () {
    return view('pemanenan.add-pemanenan'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/edit-kolam', function () {
    return view('kolam.edit-kolam'); // Mengarahkan ke views/barang/index.blade.php
});

Route::get('/jenis-ikan', [JenisIkanController::class, 'jenisIkan']);

Route::get('/jenis-ikan', [JenisIkanController::class, 'index'])->name('jenis-ikan.index');

use App\Http\Controllers\KolamController;

Route::get('/jenis-kolam', [KolamController::class, 'index']);
Route::get('/add-kolam', [KolamController::class, 'create']);
Route::post('/store-kolam', [KolamController::class, 'store']);

// Route untuk edit
Route::get('/edit-kolam/{id}', [KolamController::class, 'edit'])->name('kolam.edit');
Route::put('/update-kolam/{id}', [KolamController::class, 'update'])->name('kolam.update');

// Route untuk hapus
Route::post('/delete-kolam/{id}', [KolamController::class, 'destroy']);
