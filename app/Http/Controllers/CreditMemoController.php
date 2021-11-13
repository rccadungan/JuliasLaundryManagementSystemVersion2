<?php

namespace App\Http\Controllers;

use App\Models\{
    Customer
};
use Illuminate\Http\Request;

class CreditMemoController extends Controller
{
    public function credit_memo() {
        $customers = Customer::all();

        return view('credit_memo', 
        [
            'customers' => $customers,
        ]);
    }
}
