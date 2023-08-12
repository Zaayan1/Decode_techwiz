<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Redirect after successful login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Customize login view
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Customize credentials
    protected function credentials(Request $request)
    {
        return [
            'email' => $request->email,
            'password' => $request->password,
            'active' => 1, // Assuming you have an 'active' field in the users table
        ];
    }
}
