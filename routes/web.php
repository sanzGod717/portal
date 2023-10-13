<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class,'login'])->name('login');

//Route::post('/register', [LoginController::class,'register'])->name('register.post');
Route::get('/register', [LoginController::class,'register'])->name('register.get');

  
  
 Route::get('/logs', [LoginController::class,'logs'])->name('logs.post')->middleware('auth.basic');
 
 Route::get('/filter', [LoginController::class,'filter'])->name('filter.post')
 ->middleware('auth.basic');
 
//route::middleware('')->group(function (){});


