<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::get('/profile/create',[ProfileController::class,'create'])->name('profile.create');
Route::post('/profile',[ProfileController::class,'store'])->name('profile.store');
Route::get('/profile/{id}/edit', [ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class,'update'])->name('profile.update');
Route::get('/profile/{id}',[ProfileController::class,'destroy'])->name('profile.destroy');
