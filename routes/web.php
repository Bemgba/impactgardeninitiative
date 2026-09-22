<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Impact Garden Initiative — Web Routes
|--------------------------------------------------------------------------
| Site is under construction. Every URL returns the coming-soon page.
*/

Route::fallback(fn () => view('coming-soon'));

Route::get('/{any?}', fn () => view('coming-soon'))->where('any', '.*');
