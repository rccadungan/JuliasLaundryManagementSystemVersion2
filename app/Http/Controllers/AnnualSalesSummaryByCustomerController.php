<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualSalesSummaryByCustomerController extends Controller
{
    public function annual_sales_summary_by_customer() {
        return view('annual_sales_summary_by_customer');
    }
}
