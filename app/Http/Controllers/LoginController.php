<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        // $users = User::where('user_level', 2)
        //     ->get();
        $users = User::all();

        return view('login', [
            'users' => $users,
            'error' => ""
        ]);
    }

    public function auth(Request $request)
    {
        $users = User::where('user_level', 2)
            ->get();

        $loginData = [
            'user_name' => $request->get('username'),
            'password' => $request->get('password'),
        ];
        $rememberMe = false;

        if (Auth::attempt($loginData, $rememberMe)) {
            // login successful
            return redirect('/');
        } else {
            // invalid credetials
            return view('login', [
                'users' => $users,
                'error' => "Invalid password."
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('/login');
    }
}
