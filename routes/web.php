<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop/all', [PublicController::class, 'all'])->name('all');
Route::get('/shop-details/{id}/{name}', [PublicController::class, 'details'])->name('details');
Route::post('/filtered-products', [PublicController::class, 'filteredProducts'])->name('filtered.products');
Route::get('/products/tag/{tag}', [PublicController::class, 'filterByTag'])->name('products.byTag');

Route::get('/auth/github', [AuthController::class, 'redirectToGithub'])->name('github.login');
Route::get('/auth/github/callback', [AuthController::class, 'handleGithubCallback']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/my-account', [AuthController::class, 'account'])->name('auth.account');
