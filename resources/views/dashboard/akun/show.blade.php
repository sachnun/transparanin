@extends('dashboard.template')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Akun</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sapiente.</p>
    </div>
</div>


<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Avatar</h6>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/'. $akun->avatar) }}" class="rounded img-fluid mx-auto d-block">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink" style="">
                        <a class="dropdown-item" href="{{ route('akun.edit', $akun->id) }}">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Hapus</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Nama Depan</label>
                            <p class="text-lg">{{ $akun->nama_depan }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Nama Belakang</label>
                            <p class="text-lg">{{ $akun->nama_belakang }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Nomor Induk Kependudukan / NIK</label>
                    <p class="text-lg">{{ $akun->nik }}</p>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <p class="text-lg">{{ $akun->alamat }}</p>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label>RT</label>
                                <p class="text-lg">{{ $akun->rt }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label>RW</label>
                                <p class="text-lg">{{ $akun->rw }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Kelurahan / Desa</label>
                    <p class="text-lg">{{ $akun->kelurahan }}</p>
                </div>
                <div class="mb-3">
                    <label>Kecamatan</label>
                    <p class="text-lg">{{ $akun->kecamatan }}</p>
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Auth</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Username</label>
                    <p class="text-lg">{{ $akun->username }}</p>
                </div>
                <div class="mb-3">
                    <label>Jenis Akun</label>
                    @if($akun->is_admin)
                    <p class="text-lg">Admin</p>
                    @else
                    <p class="text-lg">RW</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection