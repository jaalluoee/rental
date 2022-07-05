<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use App\Models\Order;
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



require __DIR__.'/auth.php';

Route::controller(ContactController::class)->group(function() {
    Route::get('/contact-us', 'index')->name('contact.index');
});

Route::controller(AboutController::class)->group(function() {
    Route::get('/about-us', 'index')->name('about.index');
});

Route::controller(ProductController::class)->group(function() {
    Route::get('/product', 'index')->name('product.index');
    Route::get('/product/{id}', 'show')->name('product.show');
    Route::get('/{id}/show', 'show')->name('product.detail');
    Route::post('/{id}/show', 'createOrder')->name('product.order');

});

Route::prefix('admin')->group(function(){

    Route::controller(OrderController::class)->middleware('auth')->prefix('orders')->group(function() {
        Route::get('/', 'index')->name('order.index');
        Route::get('/{id}/show', 'show')->name('order.show');
        Route::delete('/{id}/show', 'destroy')->name('order.delete');
    
    });
    
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
    
    Route::controller(AppConfigController::class)->middleware('auth')->prefix('settings')->group(function() {
        Route::get('/', 'index')->name('app.index');
        Route::get('/create', 'create')->name('app.create');
        Route::post('/create', 'store')->name('app.store');
        Route::get('/{id}/show', 'show')->name('app.detail');
        Route::delete('/delete/{id}', 'destroy')->name('app.delete');
        Route::get('/{id}/edit', 'edit')->name('app.edit');
        Route::post('/{id}', 'update')->name('app.update');
    });

    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});
