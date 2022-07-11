@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Tracking</h1>
        <p>tracking / pantau status validasi bantuan.</p>
    </div>
    <div>

    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Tanggal Permintaan</th>
                    <th scope="col">Bencana</th>
                    <th scope="col" class="text-center">Total RT</th>
                    <th scope="col" class="text-center">Total Warga</th>
                    <th scope="col" class="text-center">Status Validasi</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 10; $i++) <tr>
                    <td scope="row" class="text-center">10-10-2022</td>
                    <td>
                        <a href="{{ route('track.show', 1) }}" class="text-decoration-none">
                            Penyebaran COVID-19
                        </a>
                    </td>
                    <td class="text-center">5</td>
                    <td class="text-center">16</td>
                    <td class="text-center">
                        <span class="badge badge-warning">Permintaan</span>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection