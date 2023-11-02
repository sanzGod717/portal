<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;

route::controller(LoginController::class)
->group(function(){
Route::get('/login','login')->name('login.get');
Route::get('/register','register')
->name('register.get');

Route::post('/logs','logs'])->name('logs.post');
Route::post('/filter','filter'])->name('filter.post');
  });


  

route::middleware(['kaizen'])->group(function (){
 Route::get('/fileUp',[FileUploadController::class,'fileUp'])->name('fileUp.get');
 Route::post('/load',[FileUploadController::class,'load'])->name('load.post');
 });
 Route::get('/',[HomeController::class,'index'])->name('home.get');




