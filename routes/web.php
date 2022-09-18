<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'admin.index')->middleware('auth')->name('dashboard');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::put('about/{id}', [AboutController::class, 'update'])->name('update_about');
    Route::resource('news', NewsController::class);
    Route::resource('courses', CourseController::class);
});
