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
Route::post('/page-6/submit-data', [RespondenController::class, 'savedQuestionPage2'])->name('savedQuestionPage2');
Route::get('/page-7', [RespondenController::class, 'page7ShowData'])->name('page7ShowData');
Route::get('/page-8', [RespondenController::class, 'page8ShowData'])->name('page8ShowData');
Route::get('/page-9', [RespondenController::class, 'page9ShowData'])->name('page9ShowData');
Route::get('/page-10', [RespondenController::class, 'page10ShowData'])->name('page10ShowData');
Route::get('/page-11', [RespondenController::class, 'page11ShowData'])->name('page11ShowData');
Route::get('/page-12', [RespondenController::class, 'pageActData'])->name('pageActData');
Route::get('/page-13/no', [RespondenController::class, 'pageNoInvestmentData'])->name('pageNoInvestmentData');
Route::post('/page-13/no/submit-data', [RespondenController::class, 'saveNoInvestmentData'])->name('saveNoInvestmentData');
Route::get('/page-13/yes', [RespondenController::class, 'pageYesInvestmentData'])->name('pageYesInvestmentData');
Route::post('/page-13/yes/submit-data', [RespondenController::class, 'saveYesInvestmentData'])->name('saveYesInvestmentData');
Route::get('/page-14', [RespondenController::class, 'pageEndQuestionnaire'])->name('pageEndQuestionnaire');
//Language
Route::get('/set-language/{locale}', [LanguageController::class, 'setLanguage'])->name('set.language');

//admin
Route::get('/V9e65vNfipHCDGD/login/private/admin', [AdminController::class, 'adminLoginShow'])->name('adminLoginShow');
Route::post('/V9e65vNfipHCDGD/login/private/admin/login-auth', [AdminController::class, 'adminLoginAuth'])->name('adminLoginAuth');
Route::middleware(['auth'])->prefix('V9e65vNfipHCDGD/private')->group(function () {
    Route::post('/logout-auth', [AdminController::class, 'adminLogout'])->name('adminLogout');
    Route::get('/dashboard', [AdminController::class, 'adminDashboardShow'])->name('adminDashboardShow');
    Route::get('/dashboard/table', [AdminController::class, 'adminShowTable'])->name('adminShowTable');
    Route::get('/table/export/excel', [AdminController::class, 'exportExcel'])->name('exportExcel');
    Route::get('/table/export/pdf', [AdminController::class, 'exportPdf'])->name('exportPdf');
});

Route::get('change', [LanguageController::class, 'change']);