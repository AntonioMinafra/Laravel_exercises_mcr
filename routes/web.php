<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


//PublicController
Route::get('/', [PublicController::class, 'viewHome'])->name('home');

//ProductController
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');

Route::post('/products/store', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/product/index', [ProductController::class, 'index'])->name('product.index')->middleware('auth');

//rotta parametrica prodotti
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');


//articleController
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index')->middleware('auth');

//rotta parametrica articoli
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
