<?php

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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('guest')->name('dashboard');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
Route::get('/logout', [\App\Http\Controllers\LogoutController::class, '__construct']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'show'])->name('home')->middleware('auth');

// работа с пользователем и привязке его к уровню доступа
Route::group(['prefix' => 'users', 'middleware' => ['auth']], function(){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->middleware('auth')->name('show-users');
    Route::get('/add', [\App\Http\Controllers\UserController::class, 'create'])->name('add-user');
    Route::get('/edit/{user}', [\App\Http\Controllers\UserController::class, 'edit'])->name('edit-user');
    Route::post('/update', [\App\Http\Controllers\UserController::class, 'update'])->name('update-user');
});

Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index'])->middleware('auth')->name('show-roles');
