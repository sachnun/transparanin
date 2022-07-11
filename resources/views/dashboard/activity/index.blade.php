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
                @foreach ($activities as $activity)
                <tr>
                    <td class="text-center">{{ $activity->created_at }}</td>
                    <td>
                        <a href="barang/1" class="text-decoration-none">
                            {{ $activity->user->nama_depan }}
                            {{ $activity->user->nama_belakang }}
                        </a>
                    </td>
                    @if ($activity->user->is_admin)
                    <td>Admin</td>
                    @else
                    <td>RW</td>
                    @endif
                    <td>{{ $activity->log }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection