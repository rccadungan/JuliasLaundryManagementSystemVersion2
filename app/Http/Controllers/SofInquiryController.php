<?php

namespace App\Http\Controllers;

use App\Models\{
    ServiceOrder,
    CreditMemo
};
use Illuminate\Http\Request;

class SofInquiryController extends Controller
{
    public function sof_inquiry() {
        $serviceOrders = ServiceOrder::all();
        $creditMemos = CreditMemo::all();

        return view('manage_discounts', [
          'serviceOrders' => $serviceOrders,
          'creditMemos' => $creditMemos,
          
      ]);

    }
}
