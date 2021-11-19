<?php

namespace App\Http\Controllers;

use App\Models\ExpenseType;

use Illuminate\Http\Request;

class EndOfDayController extends Controller
{
 /* Redundant to Reports controller */
    public function end_of_day() {
        $expenseTypes = ExpenseType::all();
             
        return view('end_of_day', [
            'expenseTypes' => $expenseTypes,
        ]);
    }
}
