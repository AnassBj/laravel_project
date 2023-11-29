<?php

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/{id}/delete', [ProductController::class, 'confirmDelete'])->name('products.confirm-delete');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
