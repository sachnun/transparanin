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
                </tr>
            </thead>
            <tbody>
                @for($i = 0; $i < 10; $i++) <tr>
                    <th scope="row" class="text-center">{{ $i }}</th>
                    <td>
                        <a href="{{ route('akun.show', 1) }}" class="text-decoration-none">
                            Lorem ipsum dolor.
                        </a>
                    </td>
                    <td class="text-center">RW</td>
                    <td class="text-center">anrinata005</td>
                    <td class="text-center">Suka Maju</td>
                    <td class="text-center">
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink" style="">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Hapus</a>
                            </div>
                        </div>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>

@endsection