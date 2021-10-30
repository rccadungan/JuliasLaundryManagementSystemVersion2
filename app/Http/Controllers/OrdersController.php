<?php

namespace App\Http\Controllers;

use App\Models\{
    Customer,
    ServiceType,
};
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function orders() {
        $service_order_no = date('Ymd') . "-" . uniqid();
        $customers = Customer::all();
        $serviceTypes = ServiceType::with('discType')
            ->get();

        return view('orders', [
            'service_order_no' => $service_order_no,
            'customers' => $customers,
            'serviceTypes' => $serviceTypes,
        ]);
    }
}
