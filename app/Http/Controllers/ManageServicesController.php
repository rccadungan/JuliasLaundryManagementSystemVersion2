<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageServicesController extends Controller
{
  /* Redundant to Services controller */  
    public function manage_services() {
        return view('manage_services');
    }
}
