@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Validasi</h1>
        <p>daftar permintaan bantuan yang siap untuk dilakukan validasi.</p>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Tanggal<br> Permintaan</th>
                    <th scope="col">Bencana</th>
                    <th scope="col" class="text-center">Total RT</th>
                    <th scope="col" class="text-center">Total Warga</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Validasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bantuans as $bantuan)
                <tr>
                    <td scope="row" class="text-center">{{ $bantuan->created_at }}</td>
                    <td>
                        <a href="{{ route('track.show', $bantuan) }}" class="text-decoration-none">
                            {{ $bantuan->bencana }}
                        </a>
                    </td>
                    <td class="text-center">{{ $bantuan->total_rt }}</td>
                    <td class="text-center">{{ $bantuan->total_warga }}</td>
                    <td class="text-center">
                        @if($bantuan->status == 'permintaan')
                        <span class="badge badge-warning">Permintaan</span>
                        @elseif ($bantuan->status == 'terkirim')
                        <span class="badge badge-primary">Terkirim</span>
                        @elseif ($bantuan->status == 'batal')
                        <span class="badge badge-danger">Batal</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false">
                                Aksi
                            </button>
                            <div class="dropdown-menu">
                                <button disabled class="dropdown-item">Diterima</button>
                                <form action="{{ route('validasi.aksi_terkirim', $bantuan) }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item">Terkirim</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('validasi.aksi_batal', $bantuan) }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item text-danger">Batalkan</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection