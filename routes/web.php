<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;

// Core Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/style-one', [ServiceController::class, 'styleOne'])->name('style-one');
    Route::get('/style-two', [ServiceController::class, 'styleTwo'])->name('style-two');
    Route::get('/{slug}', [ServiceController::class, 'details'])->name('details');
});

// Portfolio
Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/case-studies', [PortfolioController::class, 'caseStudies'])->name('case-studies');
    Route::get('/case-studies/grid', [PortfolioController::class, 'caseStudiesGrid'])->name('case-studies.grid');
    Route::get('/case-studies/{slug}', [PortfolioController::class, 'caseStudyDetails'])->name('case-study.details');
    Route::get('/team', [PortfolioController::class, 'team'])->name('team');
    Route::get('/testimonials', [PortfolioController::class, 'testimonials'])->name('testimonials');
});

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/grid', [BlogController::class, 'grid'])->name('grid');
    Route::get('/list', [BlogController::class, 'list'])->name('list');
    Route::get('/{slug}', [BlogController::class, 'details'])->name('details');
});

// Utility Pages
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [PageController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/coming-soon', [PageController::class, 'comingSoon'])->name('coming-soon');
