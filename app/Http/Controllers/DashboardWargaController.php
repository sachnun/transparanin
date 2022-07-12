<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Activity;
use App\Models\Penerima;
use Illuminate\Http\Request;

class DashboardWargaController extends Controller
{
    public function index()
    {
        //
    }

    public function create($penerima_id)
    {
        $penerima = Penerima::findOrFail($penerima_id);
        return view('dashboard.warga.create', compact('penerima'));
    }

    public function store($penerima_id, Request $request)
    {
        // validasi
        $validated = $request->validate([
            'kepala_keluarga' => 'required',
            'anggota_keluarga' => 'required',
            'kk' => 'required|unique:wargas',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
        ]);

        $validated['penerima_id'] = $penerima_id;

        // simpan data ke database
        $warga = Warga::create($validated);

        // log
        $log = new Activity();
        $log->log('Menambahkan data warga bantuan RT ' . $warga->rt);

        // redirect ke halaman index
        return redirect()->route('penerima.show', $penerima_id);
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

    public function destroy($penerima_id, $id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();

        // log
        $log = new Activity();
        $log->log('Menghapus data warga bantuan RT ' . $warga->rt);

        // redirect ke halaman index
        return redirect()->route('penerima.show', $penerima_id);
    }
}
