<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAkunController extends Controller
{

    public function index()
    {
        return view('dashboard.akun.index');
    }

    public function create()
    {
        return view('dashboard.akun.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('dashboard.akun.show');
    }

    public function edit($id)
    {
        return view('dashboard.akun.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
