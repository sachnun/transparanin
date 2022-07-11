@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Penerima</h1>
        <p>data penerima bantuan kepada warga di setiap rukun tetangga.</p>
    </div>
    <div>
        <a href="{{ route('penerima.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah RT</span>
        </a>
    </div>
</div>

<div class="card mb-4 border-left-primary">
    <div class="card-body">
        Akun terdaftar sebagai ketua RW <b>{{ auth()->user()->rw }}</b>
        di kelurahan/desa <b>{{auth()->user()->kelurahan }}</b>.
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Permintaan Bantuan</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Total RT</label>
                            <p class="text-lg">{{ $total['rt'] }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Total Warga</label>
                            <p class="text-lg">{{ $total['warga'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bencana</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dampak</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="float-right">
                    <a href="{{ route('barang.store') }}" class="btn btn-warning btn-icon-split shadow-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <span class="text">Kirim</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-body px-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">RT</th>
                            <th scope="col">Nama Ketua</th>
                            <th scope="col" class="text-center">Jumlah Warga</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerimas as $penerima)
                        <tr>
                            <th scope="row" class="text-center">{{ $penerima->rt }}</th>
                            <td>
                                <a href="{{ route('penerima.show', $penerima->id) }}" class="text-decoration-none">
                                    {{ $penerima->nama_depan }}
                                    {{ $penerima->nama_belakang }}
                                </a>
                            </td>
                            <td class="text-center">{{ $penerima->wargas->sum('anggota_keluarga') }}</td>
                            <td class="text-center">
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink" style="">
                                        <a class="dropdown-item"
                                            href="{{ route('penerima.show', $penerima->id) }}">Profile</a>
                                        <a class="dropdown-item"
                                            href="{{ route('penerima.edit', $penerima->id) }}">Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($penerimas->count() != 0)
                <small class="m-3">- klik nama ketua rt untuk menambah / melihat data warga</small>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection