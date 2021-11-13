<?php

namespace App\Http\Controllers;

use App\Models\DiscType;
use Illuminate\Http\Request;


class ManageDiscountsController extends Controller
{
    public function manage_discounts() {
        $discTypes = DiscType::all();

        return view('manage_discounts', [
          'discTypes' => $discTypes,
      ]);
    }
}
