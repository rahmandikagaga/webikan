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

Route::get('/jenis-ikan', [JenisIkanController::class, 'jenisIkan']);

Route::get('/jenis-ikan', [JenisIkanController::class, 'index'])->name('jenis-ikan.index');

