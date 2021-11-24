<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('categories')->name('categories.')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('products')->name('products.')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('index');
});
