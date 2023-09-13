<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/lang/{lang}', function($lang){
    session()->put($lang);
    return redirect()->route('site');
})->name('lang');

// Route::get('/', function () {
//     return view('front.master');
// })->name('site');

Route::get('/', [SiteController::class, 'site']);


Route::get('/admin', function () {
    return view('dashboard.index');
})->name('site');

Route::get('/test-page', function () {
    return view('front.test-page');
});
