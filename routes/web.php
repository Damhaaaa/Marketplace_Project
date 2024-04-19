<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/list', [ProductController::class, 'showAdminList'])->name('admin.list');
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
Route::get('/admin/create', [ProductController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [ProductController::class, 'store'])->name('admin.store');
Route::get('/admin/{id}', [ProductController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [ProductController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/users/index', [UserController::class, 'index'])->name('admin.users.index');
Route::delete('/admin/users/{users}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::delete('/users/{user}', [UserController::class, 'destroy'])
     ->middleware('can:delete,user');
     Route::group(['middleware' => ['admin.list']], function () {
        // Rute yang memerlukan akses admin di sini
    });
    

