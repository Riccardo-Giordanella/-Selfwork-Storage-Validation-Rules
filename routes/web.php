<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/add', [PublicController::class, 'addarticle'])->name('aggiungi');

Route::post('/add/success', [FormController::class, 'store'])->name('article.store');

Route::get('/articles', [FormController::class, 'article'])->name('article.show');