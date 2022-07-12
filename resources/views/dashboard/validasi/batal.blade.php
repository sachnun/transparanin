@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Validasi</h1>
        <p>daftar permintaan bantuan yang dinyatakan gagal dalam validasi.</p>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Tanggal<br> Permintaan</th>
                    <th scope="col" class="text-center">Tanggal<br> Update</th>
                    <th scope="col">Bencana</th>
                    <th scope="col" class="text-center">Total RT</th>
                    <th scope="col" class="text-center">Total Warga</th>
                    <th scope="col" class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bantuans as $bantuan)
                <tr>
                    <td scope="row" class="text-center">{{ $bantuan->created_at }}</td>
                    <td scope="row" class="text-center">{{ $bantuan->updated_at }}</td>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection