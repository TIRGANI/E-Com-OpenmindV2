<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('gest.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::get('/admins', [App\Http\Controllers\AdminController::class, 'index'])->name('admins');
    Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index']);
    Route::get('/addadmin', function () {
        return view('admin.addadmin');
    });
    Route::post('/add', [App\Http\Controllers\AdminController::class, 'store']);
    Route::get('/edit', [App\Http\Controllers\AdminController::class, 'edit']);
    Route::resource('/admin', AdminController::class);
});
