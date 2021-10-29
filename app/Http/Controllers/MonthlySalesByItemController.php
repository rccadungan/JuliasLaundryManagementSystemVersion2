<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlySalesByItemController extends Controller
{
    public function monthly_sales_by_item() {
        return view('monthly_sales_by_item');
    }
}
