<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlySalesBySoController extends Controller
{
    public function monthly_sales_by_so() {
        return view('monthly_sales_by_so');
    }
}
