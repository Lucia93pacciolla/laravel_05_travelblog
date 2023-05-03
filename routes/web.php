<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TravelController;
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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/travel/create', [TravelController::class, 'create'])->name('travel.create');
Route::post('/travel/store', [TravelController::class, 'store'])->name('travel.store');
Route::get('/travel/index', [TravelController::class, 'index'])->name('travel.index');
