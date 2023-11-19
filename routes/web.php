<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderhistorieController;
use App\Http\Controllers\InventoryController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/check-login-order', [LoginController::class, 'checkLoginOrder']);

Route::get('/admin', [UserController::class, 'showAdminDashboard'])->middleware('admin');

Route::get('/admin/dashboard', [UserController::class, 'showAdminDashboard'])->name('admin.dashboard');

Route::get('/pizza', [PizzaController::class, 'index']);

Route::post('/pizza', [PizzaController::class, 'store'])->name('pizza.store');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');

Route::get('/zustellung/{orderId}', [OrderController::class, 'zustellung'])->name('zustellung');

Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::patch('/users/{user}/admin', [UserController::class, 'updateAdminStatus'])->name('user.updateAdminStatus');

Route::get('/admin/search', [UserController::class, 'searchUsers'])->name('admin.searchUsers');

Route::get('/invoice/pdf/{order_id}', [OrderController::class, 'showPdf'])->name('invoice.pdf');

Route::get('/bestellung', [OrderhistorieController::class, 'bestellung'])->name('bestellung');

Route::get('lagerstand', '\App\Http\Controllers\InventoryController@index')->name('lagerstand.index');

Route::post('/update-inventory', '\App\Http\Controllers\InventoryController@updateInventory')->name('update.inventory');


