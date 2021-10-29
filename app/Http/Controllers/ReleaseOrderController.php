<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseOrderController extends Controller
{
    public function release_order() {
        return view('release_order');
    }
}
