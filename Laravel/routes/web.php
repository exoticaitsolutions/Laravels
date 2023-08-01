<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomuserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BannerController;

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
    return view('welcome');
});

Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\CustomuserController::class, 'insert_data'])->name('insert');
Route::post('/', [App\Http\Controllers\WelcomeController::class, 'insert_from'])->name('insert_from');
Route::get('/allentry', [App\Http\Controllers\CustomuserController::class, 'show'])->name('allentry');
Route::get('/delete/{id}', [App\Http\Controllers\CustomuserController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\CustomuserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\CustomuserController::class, 'update'])->name('update');
Route::get('addproduct', [App\Http\Controllers\ProductController::class, 'index'])->name('addproduct');
Route::get('add-banner', [App\Http\Controllers\BannerController::class, 'index'])->name('add-banner');
Route::POST('add-banner', [App\Http\Controllers\BannerController::class, 'create'])->name('addbanner');
Route::get('/', [App\Http\Controllers\BannerController::class, 'store'])->name('welcome');
Route::get('getbanner', [App\Http\Controllers\BannerController::class, 'show'])->name('getbanner');
Route::get('/delete/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('update');
