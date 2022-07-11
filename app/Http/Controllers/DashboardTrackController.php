<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;

class DashboardTrackController extends Controller
{
    public function index()
    {
        $bantuans = auth()->user()->bantuans->except('data_penerima');

        return view('dashboard.track.index', compact('bantuans'));
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
        $bantuan = Bantuan::findOrFail($id);

        return view('dashboard.track.show', compact('bantuan'));
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
