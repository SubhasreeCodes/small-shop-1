<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/forget_password',[HomeController::class,'forget_password'])->name('home.forget_password');  //partial 
Route::get('/register',[HomeController::class,'register'])->name('home.register'); //partial
Route::get('/login',[HomeController::class,'login'])->name('home.login'); //partial
Route::get('/about',[HomeController::class,'about'])->name('home.about'); 
