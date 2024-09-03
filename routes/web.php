<?php
use App\HTTP\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
https://mail.google.com/mail/u/0/#inbox/FMfcgzQVzFXtTmgKVTPJPQqzFnwLZjfg
|
*/



Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('about',[HomeController::class, 'about'])->name('about');
Route::get('skill',[HomeController::class, 'skill'])->name('skill');
Route::get('/skill/{skills}', [HomeController::class, 'show'])->name('show.skill');



Route::get('layout/app', function()
{  
  return view('layout.app');
}

);