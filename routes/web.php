<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[HomeController::class,"index"])->name("dashboard");

Route::prefix('hotels')->group(function () {
    Route::get('/', [HotelController::class,'index'])->name('hotels.index');
    Route::get('/all', [HotelController::class,'all'])->name('hotels.all');
});

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class,'index'])->name('about.index');
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class,'index'])->name('contact.index');
});


Route::get('/', function () {
    return Inertia::render('Home/index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
