<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('pages.welcome');
});
Route::get('about/{nama}', [HomeController::class, 'about']);

Route::get('/book',[BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::patch('/book/{id}/update', [BookController::class, 'update'])->name('book.update');
Route::delete('/book/{id}/delete', [BookController::class, 'destroy'])->name('book.delete');

