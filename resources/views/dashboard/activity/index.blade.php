@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Activity</h1>
        <p>
            semua log aktifitas akun dalam melakukan kegiatan yang terjadi.
        </p>
    </div>
    <div>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-print fa-sm text-white-50"></i>
            Print Page
        </a>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Waktu</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Log</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 30; $i++) <tr>
                    <td class="text-center">01-01-2022 12:12:12</td>
                    <td>
                        <a href="barang/1" class="text-decoration-none">
                            Beras Gudang Garam
                        </a>
                    </td>
                    <td>RW</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum, quia?</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>

@endsection