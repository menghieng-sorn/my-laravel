<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    return view('welcome');
});
Route::delete('/customer/trash/{customer}',[CustomerController::class,'forceDestroy'])->name('customer.force.destroy');
Route::get('/customer/restore/{customer}',[CustomerController::class,'restore'])->name('customer.restore');
Route::get('/customer/trash',[CustomerController::class,'trashIndex'])->name('customer.trash');
Route::resource('/customer', CustomerController::class);


Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/', [HomeController::class,'store'])->name('home');

Route::get('/about',[HomeController::class,'showAboutPage'])->name('about');

Route::get('/single-action', SingleActionController::class);

Route::get('/blog', [BlogController::class,'index']);


Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::get('/file-upload',[FileUploadController::class,'index'])->name('file.upload');
Route::post('/file-upload',[FileUploadController::class,'store'])->name('file.store');

Route::get('/file-download',[FileUploadController::class,'download'])->name('file.download');

Route::get('/join-query-builder',[JoinController::class,'indexQueryBulder']);
Route::get('/join-orm',[JoinController::class,'indexORM']);

Route::get('/posts',[PostController::class,'index']);
