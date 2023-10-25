<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function signUp()
    {
        return view('sign-Up');
    }

    public function forgotPw()
    {
        return view('forgot_password');
    }
}
