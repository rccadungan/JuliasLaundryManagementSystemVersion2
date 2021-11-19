<?php

namespace App\Http\Controllers;

use App\Models\{
    Customer,
    ServiceOrder,
    User,

};
use Illuminate\Http\Request;

class ReleaseOrderController extends Controller
{
    public function release_order() {
        $serviceOrders = ServiceOrder::all();
        $customers = Customer::all();
        $users = User::all();

        return view('release_order', [
            'serviceOrders' => $serviceOrders,
            'customers' => $customers,
            'users' => $users,
        ]);
    }
}
