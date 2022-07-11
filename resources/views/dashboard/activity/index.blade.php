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
        <button onclick="window.print();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-print fa-sm text-white-50"></i>
            Print Page
        </button>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Waktu</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col" class="text-center">Jenis</th>
                    <th scope="col">Log</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                <tr>
                    <td class="text-center">{{ $activity->created_at }}</td>
                    <td>
                        @if(auth()->user()->is_admin)
                        <a href="{{ route('akun.show', $activity->user->id) }}" class="text-decoration-none">
                            {{ $activity->user->nama_depan }}
                            {{ $activity->user->nama_belakang }}
                        </a>
                        @else
                        {{ $activity->user->nama_depan }}
                        {{ $activity->user->nama_belakang }}
                        @endif
                    </td>
                    @if ($activity->user->is_admin)
                    <td class="text-center">Admin</td>
                    @else
                    <td class="text-center">RW</td>
                    @endif
                    <td>{{ $activity->log }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- paginate --}}
        <div class="mt-4 px-4">
            {{ $activities->links() }}
        </div>
    </div>
</div>

@endsection