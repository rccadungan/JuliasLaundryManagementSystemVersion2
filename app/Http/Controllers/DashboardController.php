<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function orders() {
        return view('orders');
    }

    public function reports() {
        return view('reports');
    }

    public function customers() {
        return view('customers');
    }

    public function services() {
        return view('services');
    }

    public function inventory() {
        return view('inventory');
    }

    public function audit_trail() {
        return view('audit_trail');
    }

    public function users() {
        return view('users');
    }
}
