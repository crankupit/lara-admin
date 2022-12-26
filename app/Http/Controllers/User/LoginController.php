<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        dd('User login request received');
    }

    public function logout()
    {
        dd('User logout request received');
        // auth()->guard('user')->logout();
        // return redirect()->route('getUserLogin');
    }
}
