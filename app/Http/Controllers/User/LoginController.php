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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->guard('user')->attempt($credentials)) {
            return redirect()->route('getUserHome');
        }
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout()
    {
        auth()->guard('user')->logout();
        return redirect()->route('getUserLogin');
    }
}
