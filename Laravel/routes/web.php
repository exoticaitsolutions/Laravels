<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomuserController;
use App\Http\Controllers\WelcomeController;

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
Route::get('/home', [App\Http\Controllers\CustomuserController::class, 'show'])->name('show');
Route::get('/delete', [App\Http\Controllers\CustomuserController::class, 'delete'])->name('delete');
Route::get('/edit', [App\Http\Controllers\CustomuserController::class, 'edit'])->name('edit');


