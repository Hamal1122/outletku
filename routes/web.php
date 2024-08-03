<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\productController;
use App\Http\Middleware\checkRole;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProductFilter;






// auth
Route::get('/register', [AuthController::class, 'showRegistForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// dashboard
Route::get('/', [DashboardController::class, 'dashboardUser'])->name('dashboard.user');



// menu for user
Route::middleware(checkRole::class.':1')->group(function(){
 
    Route::get('product/detail-product/{id}', [productController::class, 'detailProductUser'])->name('detailProductUser');
    

   
});


// menu for admin
Route::middleware(checkRole::class.':0')->group(function(){

    // dashboard
    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin'])->name('dashboard.admin');
    Route::get('/admin/add-product', [productController::class, 'addProduct'])->name('addProduct');
    Route::post('/admin/add-product', [productController::class, 'addProductProses'])->name('addProductProses');
    Route::get('/admin/delete-product/{id}', [productController::class, 'deleteProduct'])->name('deleteProduct');

    Route::get('/admin/detailProduct/{id}', [productController::class, 'detailProduct'])->name('detail.product');
      
});