<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mensageiro;

class AuthController extends Controller
{
    public function showLoginForm()
    {
            return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required|string',
            'senha' => 'required|string',
        ]);

        $credentials = [
            'user' => $request->input('user'),
            'password' => $request->input('senha'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('erro', 'Usuário ou senha inválidos.');
    }


    public function logout()
    {
            Auth::logout();
            return redirect()->route('login');
    }
}
