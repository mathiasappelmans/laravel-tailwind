<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function dologin(LoginRequest $req)
    {
        $data = $req->validated();

        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        if (Auth::attempt($credentials)) { // return true or false + puts the user in the session
            // Regenerating the session ID is often done in order to prevent malicious users
            // from exploiting a session fixation attack on your application.
            $req->session()->regenerate();

            $email = $req->input('email');

            // 'intended' = redirect to the original route before the login
            // 'with' = flash data to the session, to use in the blade with session('success')
            return redirect()
                ->intended(route('auth.login'))
                ->with('success', 'You are logged in as')
                ->with('email', $email);
        }


        return redirect()
            ->route('auth.login')
            ->with('error', 'unknown user email :')
            ->onlyInput('email')
            ->withErrors(['email' => 'cet email n\'existe pas', 'password' => 'mot de passe incorrect']);
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('auth.login')->with('success', 'You are logged out');
    }
}
