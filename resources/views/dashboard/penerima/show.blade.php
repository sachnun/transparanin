@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Penerima</h1>
        <p>data penerima bantuan kepada warga di setiap RT.</p>
    </div>
    <div>
        <a href="{{ route('akun.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Warga</span>
        </a>
    </div>
</div>

<div class="card mb-4 border-left-primary">
    <div class="card-body">
        Akun terdaftar sebagai RW <b>004</b> di daerah <b>Sukamaju</b>.
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label>RT</label>
                            <p class="text-lg"><b>001</b></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Nama Ketua</label>
                            <p class="text-lg">Lorem, ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi eligendi sint
                        exercitationem modi iure laboriosam!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No KK</th>
                            <th scope="col">Kepala Keluarga</th>
                            <th scope="col" class="text-center">Anggota<br>Keluarga</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < 10; $i++) <tr>
                            <th scope="row" class="text-center">8923488329832</th>
                            <td>
                                <a href="{{ route('penerima.show', 1) }}" class="text-decoration-none">
                                    Lorem ipsum dolor.
                                </a>
                            </td>
                            <td class="text-center">4</td>
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
    </div>
</div>
@endsection