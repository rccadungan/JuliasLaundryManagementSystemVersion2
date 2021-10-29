<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditMemoController extends Controller
{
    public function credit_memo() {
        return view('credit_memo');
    }
}
