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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\UsersController;

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
});

Route::middleware(['guest'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('home.index');
    Route::get('/orders', [DashboardController::class, 'orders'])->name('home.orders');
    Route::get('/reports', [DashboardController::class, 'reports'])->name('home.reports');
    Route::get('/customers', [DashboardController::class, 'customers'])->name('home.customers');
    Route::get('/services', [DashboardController::class, 'services'])->name('home.services');
    Route::get('/inventory', [DashboardController::class, 'inventory'])->name('home.inventory');
    Route::get('/audit_trail', [DashboardController::class, 'audit_trail'])->name('home.audit_trail');
    Route::get('/users', [DashboardController::class, 'users'])->name('home.users');
});
