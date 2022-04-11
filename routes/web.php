<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route:: get('/', [CategoryController::class, 'index'])->name('home');

Route:: post('/create-category', [CategoryController::class, 'create'])->name('category.create');

Route:: get('/read-categories', [CategoryController::class, 'read'])->name('category.read');

Route:: get('/category-update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route:: post('/category-update-new/{id}', [CategoryController::class, 'updateNew'])->name('category.update-new');

Route:: get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
