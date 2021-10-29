<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyExpensesController extends Controller
{
    public function monthly_expenses() {
        return view('monthly_expenses');
    }
}
