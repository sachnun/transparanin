<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPenerimaController extends Controller
{

    public function index()
    {
        return view('dashboard.penerima.index');
    }

    public function create()
    {
        return view('dashboard.penerima.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('dashboard.penerima.show');
    }

    public function edit($id)
    {
        //
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
