<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnualListOfCreditMemoController extends Controller
{
    public function annual_list_of_credit_memo() {
        return view('annual_list_of_credit_memo');
    }
}
