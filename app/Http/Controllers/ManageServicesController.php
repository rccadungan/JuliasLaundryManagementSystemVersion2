<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ManageServicesController extends Controller
{
  /* Redundant to Services controller */  
    public function manage_services() {

      $serviceTypes = ServiceType::all();
     
      return view('manage_services', [
          'serviceTypes' => $serviceTypes,
      ]);
    }
}
