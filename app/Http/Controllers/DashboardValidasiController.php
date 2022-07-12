<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Bantuan;
use Illuminate\Http\Request;

class DashboardValidasiController extends Controller
{

    public function permintaan()
    {
        $bantuans = Bantuan::where('status', 'permintaan')->get();
        return view('dashboard.validasi.permintaan', compact('bantuans'));
    }

    public function terkirim()
    {
        $bantuans = Bantuan::where('status', 'terkirim')->get();
        return view('dashboard.validasi.terkirim', compact('bantuans'));
    }

    public function batal()
    {
        $bantuans = Bantuan::where('status', 'batal')->get();
        return view('dashboard.validasi.batal', compact('bantuans'));
    }

    public function aksi_terkirim($id)
    {
        $bantuan = Bantuan::find($id);
        $bantuan->status = 'terkirim';
        $bantuan->save();

        // log
        $log = new Activity();
        $log->log('Bantuan permintaan dari RW ' . $bantuan->user->rw . ' kelurahan/desa ' . $bantuan->user->kelurahan . ' berhasil terkirim');

        return redirect()->route('validasi.permintaan')->with('success', 'Bantuan berhasil diubah menjadi status terkirim.');
    }

    public function aksi_batal($id)
    {
        $bantuan = Bantuan::find($id);
        $bantuan->status = 'batal';
        $bantuan->save();

        // log
        $log = new Activity();
        $log->log('Bantuan permintaan dari RW ' . $bantuan->user->rw . ' kelurahan/desa ' . $bantuan->user->kelurahan . ' dibatalkan');

        return redirect()->route('validasi.permintaan')->with('success', 'Bantuan berhasil diubah menjadi status terkirim.');
    }
}
