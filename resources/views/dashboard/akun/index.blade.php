@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Akun</h1>
        <p>akun yang digunakan untuk keperluan mendata barang ataupun penerima bantuan.</p>
    </div>
    <div>
        <a href="{{ route('akun.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Akun Baru</span>
        </a>
    </div>
</div>


<div class="card shadow mb-4">
    <div class="card-body px-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col" class="text-center">Jenis<br> Akun</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Kelurahan / Desa</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($akuns as $akun)
                <tr>
                    <td class="text-center">{{ $loop->iteration + $akuns->firstItem() - 1 }}</td>
                    <td>
                        <a href="{{ route('akun.show', $akun->id) }}" class="text-decoration-none">
                            {{ $akun->nama_depan }} {{ $akun->nama_belakang }}
                        </a>
                    </td>
                    @if ($akun->is_admin)
                    <td class="text-center">Admin</td>
                    @else
                    <td class="text-center">RW</td>
                    @endif
                    <td class="text-center">{{ $akun->username }}</td>
                    <td class="text-center">{{ $akun->kelurahan }}</td>
                    <td class="text-center">
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink" style="">
                                <a class="dropdown-item" href="{{ route('akun.show', $akun->id) }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('akun.edit', $akun->id) }}">Edit</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('akun.destroy', $akun) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- paginate --}}
        <div class="mt-4 px-4">
            {{ $akuns->links() }}
        </div>
    </div>
</div>

@endsection