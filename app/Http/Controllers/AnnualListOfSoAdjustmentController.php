<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualListOfSoAdjustmentController extends Controller
{
    public function annual_list_of_so_adjustments() {
        return view('annual_list_of_so_adjustments');
    }
}
