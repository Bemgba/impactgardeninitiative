<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/* ── Public pages ─────────────────────────────────────────────────────── */
Route::get('/',          [PageController::class, 'home'])->name('home');
Route::get('/about',     [PageController::class, 'about'])->name('about');
Route::get('/what-we-do',[PageController::class, 'whatWeDo'])->name('whatwedo');
Route::get('/contact',   [PageController::class, 'contact'])->name('contact');
Route::post('/contact',  [ContactController::class, 'store'])->name('contact.store');

/* ── Favicon ──────────────────────────────────────────────────────────── */
Route::get('/favicon.ico', fn () =>
    response()->file(public_path('images/logo.png'), ['Content-Type' => 'image/png'])
);

/* ── Catch-all ────────────────────────────────────────────────────────── */
Route::fallback(fn () => redirect()->route('home'));
