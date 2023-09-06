<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\CustomerProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ProductsController;
use App\Http\Controllers\ProductController;
use App\Livewire\ShopCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Rutas que todos los usuarios pueden acceder.
*/

Route::prefix('/')->group(function () {
    Route::get('', function () {
        return view('welcome');
    })->name('home');

    Route::get('collections', function () {
        return view('shop');
    })->name('shop');

    Route::get('about', function () {
        return view('about_us');
    })->name('about');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Rutas que solo el usuario con rol "administrador" puede acceder.
*/

Route::prefix('admin')->middleware(['auth', 'verified', 'checkrole:admin'])->group(function () {
    Route::get('/products', ProductsController::class)->name('admin.dashboard');

    // Acciones de Productos
    Route::get('/create', [ProductController::class, 'index'])->name('admin.create.product');

    // Perfil Administrador
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

Route::prefix('customer')->middleware(['auth', 'verified', 'checkrole:customer'])->group(function () {
    Route::get('/dashboard', ShopCartController::class)->name('customer.dashboard');
    Route::get('/profile', [CustomerProfileController::class, 'edit'])->name('customer.profile.edit');
    Route::patch('/profile', [CustomerProfileController::class, 'update'])->name('customer.profile.update');
    Route::delete('/profile', [CustomerProfileController::class, 'destroy'])->name('customer.profile.destroy');
});

require __DIR__ . '/auth.php';
