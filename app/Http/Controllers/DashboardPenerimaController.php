<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Bantuan;
use App\Models\Penerima;
use Illuminate\Http\Request;

class DashboardPenerimaController extends Controller
{

    public function index()
    {
        $penerimas = auth()->user()->penerimas;

        $total_warga = 0;
        foreach ($penerimas as $penerima) {
            $total_warga += $penerima->wargas->sum('anggota_keluarga');
        }

        $total = [
            'rt' => $penerimas->count(),
            'warga' => $total_warga,
        ];

        return view('dashboard.penerima.index', compact('penerimas', 'total'));
    }

    public function create()
    {
        return view('dashboard.penerima.create');
    }

    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => '',
            'nik' => 'required|unique:penerimas',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;

        // simpan data ke database
        $penerima = Penerima::create($validated);

        // log
        $log = new Activity();
        $log->log('Menambahkan data penerima bantuan RT ' . $penerima->rt);

        // redirect ke halaman show
        return redirect()->route('penerima.show', $penerima);
    }

    public function show($id)
    {
        $penerima = Penerima::findOrFail($id);
        $wargas = $penerima->wargas;

        return view('dashboard.penerima.show', compact('penerima', 'wargas'));
    }

    public function edit($id)
    {
        $penerima = Penerima::findOrFail($id);

        return view('dashboard.penerima.edit', compact('penerima'));
    }

    public function update(Request $request, $id)
    {
        // validasi
        $validated = $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => '',
            'nik' => 'required|unique:penerimas,nik,' . $id,
            'alamat' => 'required',
            'rt' => 'required',
        ]);

        // simpan data ke database
        $penerima = Penerima::findOrFail($id);
        $penerima->update($validated);

        // log
        $log = new Activity();
        $log->log('Mengubah data penerima bantuan RT ' . $penerima->rt);

        // redirect ke halaman show
        return redirect()->route('penerima.show', $penerima);
    }

    public function destroy($id)
    {
        $penerima = Penerima::findOrFail($id);
        $penerima->wargas()->delete();
        $penerima->delete();

        // log
        $log = new Activity();
        $log->log('Menghapus data penerima bantuan RT ' . $penerima->rt);

        // redirect ke halaman index
        return redirect()->route('penerima.index');
    }

    public function minta_bantuan(Request $request)
    {

        $penerimas = auth()->user()->penerimas;

        $total_warga = 0;
        foreach ($penerimas as $penerima) {
            $total_warga += $penerima->wargas->sum('anggota_keluarga');
        }

        $total = [
            'rt' => $penerimas->count(),
            'warga' => $total_warga,
        ];

        // validasi
        $validated = $request->validate([
            'bencana' => 'required',
            'dampak' => 'required',
        ]);

        $validated['user_id'] = auth()->user()->id;

        // simpan data ke database
        $bantuan = Bantuan::create([
            'user_id' => $validated['user_id'],
            'bencana' => $validated['bencana'],
            'dampak' => $validated['dampak'],
            'total_rt' => $total['rt'],
            'total_warga' => $total['warga'],
            'data_penerima' => $penerimas->toJson(),
        ]);

        // log
        $log = new Activity();
        $log->log('Membuat permintaan bantuan dengan total warga ' . $total['warga'] . ' orang');

        // redirect ke halaman show
        return redirect()->route('track.show', $bantuan);
    }
}
