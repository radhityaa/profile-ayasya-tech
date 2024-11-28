<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('/portofolio/{slug}', [HomeController::class, 'detailPortofolio'])->name('portofolio.detail');
