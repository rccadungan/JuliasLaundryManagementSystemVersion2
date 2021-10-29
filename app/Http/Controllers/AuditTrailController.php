<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditTrailController extends Controller
{
    public function audit_trail() {
        return view('audit_trail');
    }
}
