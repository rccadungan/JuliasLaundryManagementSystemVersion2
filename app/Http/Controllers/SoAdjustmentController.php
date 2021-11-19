<?php

namespace App\Http\Controllers;

use App\Models\{
    SoAdjustment,
    ServiceOrder,
    User,
};
use Illuminate\Http\Request;

class SoAdjustmentController extends Controller
{
    public function so_adjustments() {
        $serviceOrders = ServiceOrder::all();
        $soAdjustments = SoAdjustment::all();
        $users = User::all();

        return view('so_adjustments', [
            'serviceOrders' => $serviceOrders,
            'soAdjustments' => $soAdjustments,
            'users' => $users,
        ]);
        
    }
}
