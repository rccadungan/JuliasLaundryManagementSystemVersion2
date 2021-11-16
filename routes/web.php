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
use App\Http\Controllers\SofInquiryController;
use App\Http\Controllers\CreditMemoController;
use App\Http\Controllers\SoAdjustmentController;
use App\Http\Controllers\ReleaseOrderController;
use App\Http\Controllers\EndOfDayController;  /* Redundant to Reports controller */
use App\Http\Controllers\MonthlySalesBySoController;
use App\Http\Controllers\MonthlySalesByCustomerController;
use App\Http\Controllers\MonthlySalesByItemController;
use App\Http\Controllers\MonthlyExpensesController;
use App\Http\Controllers\AnnualSalesSummaryByCustomerController;
use App\Http\Controllers\AnnualSalesByCustomerMonthController;
use App\Http\Controllers\AnnualExpensesController;
use App\Http\Controllers\AnnualListOfCreditMemoController;
use App\Http\Controllers\AnnualListOfCancelledSoController;
use App\Http\Controllers\AnnualListOFSoAdjustmentController;
use App\Http\Controllers\ManageCustomersController; /* Redundant to Customers controller */
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\ManageServicesController; /* Redundant to Services controller */
use App\Http\Controllers\ManageDiscountsController;

Route::middleware(['guest'])->group(function() {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

    Route::get('/', [DashboardController::class, 'index'])->name('home.index');
    Route::get('/orders', [OrdersController::class, 'orders'])->name('home.orders');
    Route::post('/orders', [OrdersController::class, 'post'])->name('orders.post');

    Route::get('/reports', [ReportsController::class, 'reports'])->name('home.reports');
    Route::get('/customers', [CustomersController::class, 'customers'])->name('home.customers');
    Route::get('/services', [ServicesController::class, 'services'])->name('home.services');
    Route::get('/inventory', [InventoryController::class, 'inventory'])->name('home.inventory');
    Route::get('/audit_trail', [AuditTrailController::class, 'audit_trail'])->name('home.audit_trail');
    Route::get('/users', [UsersController::class, 'users'])->name('home.users');
    Route::get('/sof_inquiry', [SofInquiryController::class, 'sof_inquiry'])->name('sof_inquiry');
    Route::get('/credit_memo', [CreditMemoController::class, 'credit_memo'])->name('credit_memo');
    Route::get('/so_adjustments', [SoAdjustmentController::class, 'so_adjustments'])->name('so_adjustments');
    Route::get('/release_order', [ReleaseOrderController::class, 'release_order'])->name('release_order');
    Route::get('/end_of_day', [EndOfDayController::class, 'end_of_day'])->name('end_of_day'); /* Redundant to Reports controller */
    Route::get('/monthly_sales_by_so', [MonthlySalesBySoController::class, 'monthly_sales_by_so'])->name('monthly_sales_by_so');
    Route::get('/monthly_sales_by_customer', [MonthlySalesByCustomerController::class, 'monthly_sales_by_customer'])->name('monthly_sales_by_customer');
    Route::get('/monthly_sales_by_item', [MonthlySalesByItemController::class, 'monthly_sales_by_item'])->name('monthly_sales_by_item');
    Route::get('/monthly_expenses', [MonthlyExpensesController::class, 'monthly_expenses'])->name('monthly_expenses');
    Route::get('/annual_sales_summary_by_customer', [AnnualSalesSummaryByCustomerController::class, 'annual_sales_summary_by_customer'])->name('annual_sales_summary_by_customer');
    Route::get('/annual_sales_by_customer_month', [AnnualSalesByCustomerMonthController::class, 'annual_sales_by_customer_month'])->name('annual_sales_by_customer_month');
    Route::get('/annual_expenses', [AnnualExpensesController::class, 'annual_expenses'])->name('annual_expenses');
    Route::get('/annual_list_of_credit_memo', [AnnualListOfCreditMemoController::class, 'annual_list_of_credit_memo'])->name('annual_list_of_credit_memo');
    Route::get('/annual_list_of_cancelled_so', [AnnualListOfCancelledSoController::class, 'annual_list_of_cancelled_so'])->name('annual_list_of_cancelled_so');
    Route::get('/annual_list_of_so_adjustments', [AnnualListOfSoAdjustmentController::class, 'annual_list_of_so_adjustments'])->name('annual_list_of_so_adjustments');
    
    Route::get('/manage_customers', [ManageCustomersController::class, 'manage_customers'])->name('manage_customers'); /* Redundant to Customers controller */

    Route::get('/transactions', [TransactionsController::class, 'transactions'])->name('transactions');
    Route::get('/manage_services', [ManageServicesController::class, 'manage_services'])->name('manage_services'); /* Redundant to Services controller */
    Route::get('/manage_discounts', [ManageDiscountsController::class, 'manage_discounts'])->name('manage_discounts');
});
