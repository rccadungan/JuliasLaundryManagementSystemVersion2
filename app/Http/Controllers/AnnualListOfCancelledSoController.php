<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualListOfCancelledSoController extends Controller
{
    public function annual_list_of_cancelled_so() {
        return view('annual_list_of_cancelled_so');
    }
}
