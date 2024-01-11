<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authcontroller extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authenticated, redirect to the appropriate dashboard based on role
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboardadmin');
            } elseif ($user->role === 'staff') {
                return redirect()->route('admin.produk-berelasi.index');
            }
        }

        // Authentication failed, redirect back with an error message
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function dashboardadmin()
    {
        // Implementasi untuk dashboard admin
        return view('dashboardadmin');
    }

    // public function dashboardstaff()
    // {
    //     // Implementasi untuk dashboard staff
    //     return view('dashboardstaff');
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
