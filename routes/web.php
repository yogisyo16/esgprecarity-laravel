<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RespondenController;
use Illuminate\Support\Facades\Route;

//responden
Route::get('/', [RespondenController::class, 'respondenShowData'])->name('respondenShowData');
Route::get('/page-1', [RespondenController::class, 'page1ShowData'])->name('page1ShowData');
Route::get('/page-2', [RespondenController::class, 'page2ShowData'])->name('page2ShowData');
Route::get('/page-3', [RespondenController::class, 'showRespondenDataCollection'])->name('showRespondenDataCollection');
Route::get('/thank-you', [RespondenController::class, 'noShowData'])->name('noShowData');

//admin
Route::get('/dashboard/private/admin', [AdminController::class, 'adminDashboardShow'])->name('adminShowData');

Route::get('change', [LanguageController::class, 'change']);