<?php

use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin/dashboard');
Route::get('/admin/login', [PortalController::class, 'login'])->name('login');
Route::get('/admin/dashboard', [PortalController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/indeks-desa/kuesioner', [PortalController::class, 'kuesioner'])->name('kuesioner');
