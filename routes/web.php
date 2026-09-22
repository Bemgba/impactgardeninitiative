<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/* ── Public pages ─────────────────────────────────────────────────────── */
Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/about',     [PageController::class, 'about'])->name('about');
Route::get('/programs',  [PageController::class, 'programs'])->name('programs');
Route::get('/impact',    [PageController::class, 'impact'])->name('impact');
Route::get('/team',      [PageController::class, 'team'])->name('team');
Route::get('/contact',   [PageController::class, 'contact'])->name('contact');
Route::post('/contact',  [ContactController::class, 'store'])->name('contact.store');

/* ── Favicon ──────────────────────────────────────────────────────────── */
Route::get('/favicon.ico', fn () =>
    response()->file(public_path('images/logo.png'), ['Content-Type' => 'image/png'])
);

/* ── Catch-all: redirect unknown URLs to home ────────────────────────── */
Route::fallback(fn () => redirect()->route('home'));
