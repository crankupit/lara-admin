<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.auth.register');
    }

    public function register()
    {
        dd('User register request received, Add the logic in App\Http\Controllers\User\RegisterController.php');
    }
}
