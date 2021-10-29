<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlySalesByCustomerController extends Controller
{
    public function monthly_sales_by_customer() {
        return view('monthly_sales_by_customer');
    }
}
