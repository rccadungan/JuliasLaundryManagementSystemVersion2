<?php

namespace App\Http\Controllers;

use App\Models\{
    Customer
};
use Illuminate\Http\Request;

class ReleaseOrderController extends Controller
{
    public function release_order() {
        $customers = Customer::all();

        return view('release_order', 
        [
            'customers' => $customers,
        ]);
    }
}
