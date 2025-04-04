<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop/all', [PublicController::class, 'all'])->name('all');
Route::get('/shop-details/{id}/{name}', [PublicController::class, 'details'])->name('details')->middleware('auth');
Route::post('/filtered-products', [PublicController::class, 'filteredProducts'])->name('filtered.products');
Route::get('/products/tag/{tag}', [PublicController::class, 'filterByTag'])->name('products.byTag');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/auth/github', [AuthController::class, 'redirectToGithub'])->name('github.login');
Route::get('/auth/github/callback', [AuthController::class, 'handleGithubCallback']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/my-account', [AuthController::class, 'account'])->name('auth.account');

Route::get('/blog-index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show')->middleware('auth');

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create')->middleware('auth');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');

Route::get('/user/blog/{id}', [BlogController::class, 'user_blog'])->name('blog.user')->middleware('auth');
Route::get('/user/review/{id}', [ReviewController::class, 'user_review'])->name('review.user')->middleware('auth');
Route::delete('/user/destroy', [PublicController::class, 'user_destroy'])->name('user.destroy');
Route::get('/my-account', [PublicController::class, 'account'])->name('account');

Route::get('/blog/category/{categoryId}', [BlogController::class, 'filterByCategory'])->name('blog.category')->middleware('auth');