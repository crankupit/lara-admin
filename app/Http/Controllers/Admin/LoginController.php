<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('getAdminHome');
        }
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('getAdminLogin');
    }
}
