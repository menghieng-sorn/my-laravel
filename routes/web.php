<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleActionController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'showAboutPage'])->name('about');

Route::get('/single-action', SingleActionController::class);

Route::resource('/blog', BlogController::class);
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'submit'])->name('contact.submit');

