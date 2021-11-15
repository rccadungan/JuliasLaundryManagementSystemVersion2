<?php

namespace App\Http\Controllers;

use App\Models\{
    ServiceOrder,
    CreditMemo,
    Customer,
    
};
use Illuminate\Http\Request;

class SofInquiryController extends Controller
{
    public function sof_inquiry() {
        $serviceOrders = ServiceOrder::all();
        $creditMemos = CreditMemo::all();
        $customers = Customer::all();
        

        return view('sof_inquiry', [
          'serviceOrders' => $serviceOrders,
          'creditMemos' => $creditMemos,
          'customers' => $customers,
          
      ]);

    }
}
