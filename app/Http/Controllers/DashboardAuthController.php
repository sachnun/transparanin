<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAuthController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }
}
