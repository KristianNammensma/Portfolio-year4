<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baseController;
use App\Http\Controllers\pageController;

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

Route::get('/', [pageController::class,'index'])->name('Home');

Route::get('/Burgerschap', [pageController::class,'burgerSchap'])->name('Burgerschap');

Route::get('/Cv', [pageController::class,'Cv'])->name('Cv');

Route::get('/Frontend', [pageController::class,'Frontend'])->name('Frontend');

Route::get('/Gaming', [pageController::class,'Gaming'])->name('Gaming');

Route::get('/App', [pageController::class,'App'])->name('App');