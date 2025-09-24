<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('delete');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('update');
Route::post('/posts/{post}', [PostController::class, 'store'])->name('create');