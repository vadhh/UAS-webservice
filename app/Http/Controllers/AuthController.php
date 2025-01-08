<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:5',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Set session dan redirect
        session(['user' => $user]);
        return redirect('/account')->with('success', 'Pendaftaran berhasil!');
    }
}
