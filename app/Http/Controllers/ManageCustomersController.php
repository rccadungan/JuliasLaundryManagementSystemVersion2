<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCustomersController extends Controller
{
 /* Redundant to Customers controller */   
    public function manage_customers() {
        return view('manage_customers');
    }
}
