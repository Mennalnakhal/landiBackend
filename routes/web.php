<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('land')->name('land.')->group(function() {
    Route::get('/', [LandingController::class, 'index'])->name('index');
    Route::get('/about', [LandingController::class, 'about'])->name('about');
    Route::get('/TermsofUse', [LandingController::class, 'TermsofUse'])->name('TermsofUse');
    Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
    Route::get('/PrivacyPolicy', [LandingController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
});
