<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        $users = [
            [
                'username' => "Girl 1"
            ],
            [
                'username' => "Girl 2"
            ],
            [
                'username' => "Girl 3"
            ],
        ];

        return view('login', [
            'users' => $users
        ]);
    }
}
