@extends('dashboard.template')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Akun</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, sapiente.</p>
    </div>
    <div>
        <button type="submit" form="myform" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-floppy-disk"></i>
            </span>
            <span class="text">Simpan</span>
        </button>
    </div>
</div>

<form id="myform" action="{{ route('akun.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Poster</h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/avatar.png') }}" class="rounded img-fluid mx-auto d-block">
                    <div class="form-group my-3">
                        <input type="file" class="form-control-file" name="avatar">
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
                                <label class="form-label @error('nama_depan') is-invalid @enderror">Nama Depan</label>
                                <input type="text" class="form-control" name="nama_depan"
                                    value="{{ old('nama_depan') }}">
                                @error('nama_depan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label @error('nama_belakang') is-invalid @enderror">Nama
                                    Belakang</label>
                                <input type="text" class="form-control" name="nama_belakang"
                                    value="{{ old('nama_belakang') }}">
                                @error('nama_belakang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class=" mb-3">
                        <label class="form-label @error('nik') is-invalid @enderror">Nomor Induk Kependudukan /
                            NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class=" mb-3">
                        <label class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label @error('rt') is-invalid @enderror">RT</label>
                                <input type="text" class="form-control" name="rt" value="{{ old('rt') }}">
                                @error('rt')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label @error('rw') is-invalid @enderror">
                                    <b>RW</b>
                                </label>
                                <input type="text" class="form-control" name="rw" value="{{ old('rw') }}">
                                @error('rw')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label @error('kelurahan') is-invalid @enderror">Kelurahan / Desa</label>
                        <input type="text" class="form-control" name="kelurahan" value="{{ old('kelurahan') }}">
                        @error('kelurahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label @error('kecamatan') is-invalid @enderror">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}">
                        @error('kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Auth</h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label @error('username') is-invalid @enderror">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Jenis Akun</label>
                        <select class="form-control" name="is_admin">
                            <option value="0">RW</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection