<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAuthController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // log
            $log = new Activity;
            $log->log('Melakukan login');

            return redirect()->intended('dashboard');
        }

        return redirect()->route('login')
            ->withErrors(['username' => 'Username atau password salah'])
            ->withInput(['username' => $request->username]);
    }

    public function logout()
    {

        // log
        $log = new Activity;
        $log->log('Melakukan logout');

        auth()->logout();

        return redirect()->route('login');
    }
}
