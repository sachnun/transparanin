<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Penerima;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $bantuans = Bantuan::all();

        $total_permintaan = 0;
        $total_terkirim = 0;
        $total_batal = 0;
        foreach ($bantuans as $bantuan) {
            if ($bantuan->status == 'permintaan') {
                $total_permintaan += $bantuan->total_warga;
            }

            if ($bantuan->status == 'terkirim') {
                $total_terkirim += $bantuan->total_warga;
            }

            if ($bantuan->status == 'batal') {
                $total_batal += $bantuan->total_warga;
            }
        }

        $total = [
            'total_bantuan' => $total_permintaan + $total_terkirim,
            'total_permintaan' => $total_permintaan,
            'total_terkirim' => $total_terkirim,
            'total_batal' => $total_batal,
        ];

        return view('dashboard.ringkasan', compact('total'));
    }
}
