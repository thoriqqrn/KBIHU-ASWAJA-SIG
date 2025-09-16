<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // <-- Jangan lupa import

// Ketika seseorang mengakses URL utama ('/'), panggil method 'beranda' di 'PageController'
Route::get('/', [PageController::class, 'beranda']);