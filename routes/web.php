<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ConsumersController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.page.dashboard.index');
});

// Route::get('/api/cities', [ScanController::class, 'search'])->name('api.cities.search');

// Route::middleware('guest')->group(function () {
//     Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// });

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/create-form', [CategoriesController::class, 'createForm'])->name('admin.categories.create');
    Route::post('/store', [CategoriesController::class, 'store'])->name('admin.categories.store');
});
Route::prefix('products')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('admin.products.index');
});
Route::prefix('consumers')->group(function () {
    Route::get('/', [ConsumersController::class, 'index'])->name('admin.consumers.index');
});
Route::prefix('orders')->group(function () {
    Route::get('/', [OrdersController::class, 'index'])->name('admin.orders.index');
});
