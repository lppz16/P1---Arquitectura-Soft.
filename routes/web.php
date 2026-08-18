<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'home'])->name('order.home');

Route::get('/orders/create', [OrderController::class, 'create'])->name('order.create');

Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

Route::post('/orders', [OrderController::class, 'store'])->name('order.store');

Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');

Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
