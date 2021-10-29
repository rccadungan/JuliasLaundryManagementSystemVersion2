<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndOfDayController extends Controller
{
 /* Redundant to Reports controller */
    public function end_of_day() {
        return view('end_of_day');
    }
}
