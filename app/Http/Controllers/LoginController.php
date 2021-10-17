<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        $users = [
            [
                'username' => "girl_1"
            ],
            [
                'username' => "girl_2"
            ],
            [
                'username' => "girl_3"
            ],
        ];

        return view('login', [
            'users' => $users
        ]);
    }
}
