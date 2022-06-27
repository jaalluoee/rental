<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(WarehouseController::class)->prefix('warehouse')->group(function () {
    Route::get('/', 'index')->name('warehouse.index');
    Route::get('/create', 'create')->name('warehouse.create');
    Route::post('/create', 'store')->name('warehouse.store');
    Route::delete('/delete/{id}', 'destroy')->name('warehouse.delete');
    Route::get('/{id}/edit', 'edit')->name('warehouse.edit');
    Route::post('/{id}', 'update')->name('warehouse.update');
    Route::get('/{id}/show', 'show')->name('warehouse.detail');
});