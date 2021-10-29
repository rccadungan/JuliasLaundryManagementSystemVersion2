<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualExpensesController extends Controller
{
    public function annual_expenses() {
        return view('annual_expenses');
    }
}
