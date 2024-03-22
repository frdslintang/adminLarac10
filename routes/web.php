<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/user', [HomeController::class, 'index'])->name('index');

Route::get('/create',[HomeController::class, 'create'])->name('user_create');

Route::post('/store',[HomeController::class, 'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class, 'edit'])->name('user.edit');
Route::put('/update/{id}',[HomeController::class, 'update'])->name('user.update');

Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

