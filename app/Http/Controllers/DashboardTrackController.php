<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTrackController extends Controller
{
    public function index()
    {
        return view('dashboard.track.index');
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
        return view('dashboard.track.show');
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
