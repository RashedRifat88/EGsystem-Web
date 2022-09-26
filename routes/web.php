<?php

use App\Http\Controllers\FrontPagesController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontPagesController::class, 'index'])->name('home');
Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
