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

Route::group(['prefix' => 'types_of_repair', 'middleware' => ['auth']], function(){
    Route::get('/', [\App\Http\Controllers\TypeOfRepairController::class, 'index'])->middleware('auth')->name('show-type-of-repair');
    Route::get('/add', [\App\Http\Controllers\TypeOfRepairController::class, 'create'])->name('add-type-of-repair');
    Route::post('/add', [\App\Http\Controllers\TypeOfRepairController::class, 'store'])->name('store-type-of-repair');
    Route::get('/edit/{typeOfRepair}', [\App\Http\Controllers\TypeOfRepairController::class, 'edit'])->name('edit-type-of-repair');
    Route::post('/update', [\App\Http\Controllers\TypeOfRepairController::class, 'update'])->name('update-type-of-repair');
});

Route::group(['prefix' => 'types_of_work', 'middleware' => ['auth']], function(){
    Route::get('/', [\App\Http\Controllers\TypeOfWorkController::class, 'index'])->middleware('auth')->name('show-type-of-work');
    Route::get('/add', [\App\Http\Controllers\TypeOfWorkController::class, 'create'])->name('add-type-of-work');
    Route::post('/add', [\App\Http\Controllers\TypeOfWorkController::class, 'store'])->name('store-type-of-work');
    Route::get('/edit/{typeOfWork}', [\App\Http\Controllers\TypeOfWorkController::class, 'edit'])->name('edit-type-of-work');
    Route::post('/update', [\App\Http\Controllers\TypeOfWorkController::class, 'update'])->name('update-type-of-work');
});

Route::get('/roles', [\App\Http\Controllers\RoleController::class, 'index'])->middleware('auth')->name('show-roles');
