<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardValidasiController extends Controller
{

    public function permintaan()
    {
        return view('dashboard.validasi.permintaan');
    }

    public function terkirim()
    {
        return view('dashboard.validasi.terkirim');
    }

    public function batal()
    {
        return view('dashboard.validasi.batal');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
