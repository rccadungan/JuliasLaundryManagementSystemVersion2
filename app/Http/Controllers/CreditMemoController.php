<?php

namespace App\Http\Controllers;

use App\Models\{
    ServiceOrder,
    Customer,
    CreditMemo
};
use Illuminate\Http\Request;

class CreditMemoController extends Controller
{
    public function credit_memo() {
        $serviceOrders = ServiceOrder::all();
        $customers = Customer::all();
        $creditMemos = CreditMemo::all();

        return view('credit_memo', [
            'serviceOrders' => $serviceOrders,
            'customers' => $customers,
            'creditMemos' => $creditMemos,
        ]);
    }
}
