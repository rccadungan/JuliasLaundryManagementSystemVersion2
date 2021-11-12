<?php

namespace App\Http\Controllers;

use App\Models\{
    DiscType,
    ServiceType
};
use Illuminate\Http\Request;


class ManageDiscountsController extends Controller
{
    public function manage_discounts() {

        $discTypes = DiscType::all();
        $serviceTypes = ServiceType::all();


        return view('manage_discounts', [
          'discTypes' => $discTypes,
          'serviceTypes' => $serviceTypes,
          
      ]);
    }
}
