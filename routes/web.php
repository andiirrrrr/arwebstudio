<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/layanan/{id}', [PageController::class, 'serviceDetail'])->name('service.detail');
Route::get('/portofolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portofolio/{id}', [PageController::class, 'portfolioDetail'])->name('portfolio.detail');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send')->middleware('throttle:5,1');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');