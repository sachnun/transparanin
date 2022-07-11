@extends('dashboard.template')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Akun</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sapiente.</p>
    </div>
    <div>
        <a href="{{ route('barang.store') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-floppy-disk"></i>
            </span>
            <span class="text">Simpan</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Poster</h6>
            </div>
            <div class="card-body">
                <img src="https://image.shutterstock.com/image-vector/example-signlabel-features-speech-bubble-260nw-1223219908.jpg"
                    class="rounded img-fluid mx-auto d-block">
                <div class="form-group my-3">
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
            </div>
            <!-- Card Body -->
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
                            <label class="form-label">RT</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">
                                <b>RW</b>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelurahan / Desa</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-4">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Auth</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Akun</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>RW</option>
                        <option>Admin</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection