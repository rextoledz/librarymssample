<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BookController;
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
Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::prefix('admin')->middleware(['admin'])->group(function(){
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
	Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/manage-user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user');
    Route::get('/roles', [App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.role');
    Route::get('/roles/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('admin.role.create');
    Route::post('/roles/store', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('admin.role.store');
});

Route::prefix('student')->middleware(['student'])->group(function(){
	Route::get('/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'index'])->name('student.dashboard');
});