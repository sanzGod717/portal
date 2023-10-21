<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;

Route::get('/login', [LoginController::class,'login'])->name('login.get');
Route::get('/register', [LoginController::class,'register'])->name('register.get');

route::middleware('kaizen')->group(function (){
  Route::post('/logs', [LoginController::class,'logs'])->name('logs.post');
 Route::post('/filter', [LoginController::class,'filter'])->name('filter.post');

 Route::get('/fileUp',[FileUploadController::class,'fileUp'])->name('fileUp.get');
 Route::post('/load',[FileUploadController::class,'load'])->name('load.post');
});
 Route::get('/',[HomeController::class,'index'])->name('home.get');




