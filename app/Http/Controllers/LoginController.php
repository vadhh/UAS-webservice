<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Otentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Simpan data pengguna ke session
            $user = Auth::user();
            Session::put('user', $user);

            return redirect()->route('account')->with('success', 'Anda berhasil login');
        }

        // Jika login gagal
        return back()->withErrors(['login' => 'Username atau password salah']);
    }
    
}
