<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;

Route::get('/',[homecontroller::class,'index'])->name('home');
Route::get('/about',[homecontroller::class,'about'])->name('about');
Route::get('/gallery',[homecontroller::class,'gallery'])->name('gallery');
Route::get('/products',[homecontroller::class,'product'])->name('product');
Route::get('/contact',[homecontroller::class,'contact'])->name('contact');
Route::post('/contact',[homecontroller::class,'store'])->name('store');
Route::post('/',[homecontroller::class,'sliderstore'])->name('slstore');




Route::get('/login',[admincontroller::class,'login'])->name('login');
Route::post('/login',[admincontroller::class,'loginattempt'])->name('loginattempt');
Route::get('/logout',[admincontroller::class,'logout'])->name('logout');
Route::get('/admin',[admincontroller::class,'dashboard'])->middleware('check.session')->name('dashboard');
Route::post('/admin',[admincontroller::class,'createproduct'])->name('cpro');

// Route::get('admin/category',[admincontroller::class,'cate'])->middleware('check.session')->name('category');
// Route::post('admin/category',[admincontroller::class,'createcate'])->middleware('check.session')->name('ccate');
// Route::post('admin/category/{id}',[admincontroller::class,'cateup'])->middleware('check.session')->name('cupdate');
// Route::post('admin/cate/{id}',[admincontroller::class,'catedel'])->middleware('check.session')->name('cdel');

Route::middleware('check.session')->prefix('admin')->group(function () {
    Route::get('category', [AdminController::class, 'cate'])->name('category');
    Route::post('category', [AdminController::class, 'createcate'])->name('ccate');
    Route::post('category/{id}', [AdminController::class, 'cateup'])->name('cupdate');
    Route::post('cate/{id}', [AdminController::class, 'catedel'])->name('cdel');
});

// Route::prefix('admin')->controller(admincontroller::class)->group(function () {
//     Route::get('/', 'dashboard')->name('dashboard');
//     Route::post('/', 'createproduct')->name('cpro');
//     Route::post('/category', 'createcate')->name('ccate');
    
// });
