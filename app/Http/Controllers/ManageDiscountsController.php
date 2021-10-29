<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageDiscountsController extends Controller
{
    public function manage_discounts() {
        return view('manage_discounts');
    }
}
