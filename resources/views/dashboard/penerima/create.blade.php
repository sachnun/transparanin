@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Penerima</h1>
        <p>data penerima bantuan kepada warga di setiap rukun tetangga.</p>
    </div>
    <div>
        <a href="{{ route('penerima.store') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-floppy-disk"></i>
            </span>
            <span class="text">Simpan</span>
        </a>
    </div>
</div>

<div class="card mb-4 border-left-primary">
    <div class="card-body">
        Akun terdaftar sebagai RW <b>004</b> di daerah <b>Sukamaju</b>.
    </div>
</div>

<div class="row">
    <div class="col-md-9 mx-auto">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail RT</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Nama Depan</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Kependudukan / NIK</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label"><b>RT</b></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">
                                RW
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelurahan / Desa</label>
                    <input type="text" class="form-control" readonly>
                </div>
                <div class="mb-4">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection