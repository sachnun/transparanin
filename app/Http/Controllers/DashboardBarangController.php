<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardBarangController extends Controller
{

    public function index()
    {
        return view('dashboard.barang.index');
    }


    public function create()
    {
        return view('dashboard.barang.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($barang)
    {
        return view('dashboard.barang.show');
    }


    public function edit($barang)
    {
        return view('dashboard.barang.edit');
    }


    public function update(Request $request, $barang)
    {
        //
    }


    public function destroy($barang)
    {
        //
    }
}
