<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualSalesByCustomerMonthController extends Controller
{
    public function annual_sales_by_customer_month() {
        return view('annual_sales_by_customer_month');
    }
}
