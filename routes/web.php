<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;

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

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
	Route::get('/manage-user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user');
});

Route::prefix('student')->middleware(['auth','student'])->group(function(){
	Route::get('/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'index'])->name('student.dashboard');
});