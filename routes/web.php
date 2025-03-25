<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

//responden
Route::get('/', [RespondenController::class, 'respondenShowData'])->name('respondenShowData');
Route::get('/page-1', [RespondenController::class, 'page1ShowData'])->name('page1ShowData');
Route::get('/page-2', [RespondenController::class, 'page2ShowData'])->name('page2ShowData');
Route::get('/thank-you', [RespondenController::class, 'noShowData'])->name('noShowData');
Route::get('/page-3', [RespondenController::class, 'showRespondenDataCollection'])->name('showRespondenDataCollection');
Route::post('/page-3/submit-data', [RespondenController::class, 'getRespondenDataCollection'])->name('getRespondenDataCollection');
Route::get('/page-4', [RespondenController::class, 'showQuestionnaireInformation'])->name('showQuestionnaireInformation');
//responden-question
Route::get('/page-5', [RespondenController::class, 'showQuestionPage1'])->name('showQuestionPage1');
Route::post('/page-5/submit-data', [RespondenController::class, 'savedQuestionPage1'])->name('savedQuestionPage1');
Route::get('/page-6', [RespondenController::class, 'showQuestionPage2'])->name('showQuestionPage2');

//Language
Route::get('/set-language/{locale}', [LanguageController::class, 'setLanguage'])->name('set.language');

//admin
Route::get('/V9e65vNfipHCDGD/login/private/admin', [AdminController::class, 'adminLoginShow'])->name('adminLoginShow');
Route::get('/BuH6MDhXvBzU40C/dashboard/private/admin', [AdminController::class, 'adminDashboardShow'])->name('adminShowData');

Route::get('change', [LanguageController::class, 'change']);