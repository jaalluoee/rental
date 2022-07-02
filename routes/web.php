<?php

use App\Http\Controllers\AppConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(WarehouseController::class)->middleware('auth')->prefix('warehouse')->group(function () {
    Route::get('/', 'index')->name('warehouse.index');
    Route::get('/create', 'create')->name('warehouse.create');
    Route::post('/create', 'store')->name('warehouse.store');
    Route::delete('/delete/{id}', 'destroy')->name('warehouse.delete');
    Route::get('/{id}/edit', 'edit')->name('warehouse.edit');
    Route::post('/{id}', 'update')->name('warehouse.update');
    Route::get('/{id}/show', 'show')->name('warehouse.detail');
});

Route::controller(UserController::class)->middleware('auth')->prefix('user')->group(function() {
    Route::get('/', 'index')->name('user.index');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/create', 'store')->name('user.store');
    Route::delete('/delete/{id}', 'destroy')->name('user.delete');
    Route::get('/{id}/edit', 'edit')->name('user.edit');
    Route::post('/{id}', 'update')->name('user.update');
    Route::get('/{id}/show', 'show')->name('user.detail');
});

Route::controller(AppConfigController::class)->middleware('auth')->prefix('app')->group(function() {
    Route::get('/', 'index')->name('app.index');
    Route::get('/create', 'create')->name('app.create');
    Route::post('/create', 'store')->name('app.store');
    Route::get('/{id}/show', 'show')->name('app.detail');
    Route::delete('/delete/{id}', 'destroy')->name('app.delete');
    Route::get('/{id}/edit', 'edit')->name('app.edit');
    Route::post('/{id}', 'update')->name('app.update');





});