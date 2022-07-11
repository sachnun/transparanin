@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Penerima</h1>
        <p>data penerima bantuan kepada warga di setiap rukun tetangga.</p>
    </div>
    <div>
        <button type="submit" form="myform" class="btn btn-warning btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-pen"></i>
            </span>
            <span class="text">Update</span>
        </button>
    </div>
</div>

<div class="card mb-4 border-left-primary">
    <div class="card-body">
        Akun terdaftar sebagai ketua RW <b>{{ auth()->user()->rw }}</b>
        di kelurahan/desa <b>{{auth()->user()->kelurahan }}</b>.
    </div>
</div>

<form id="myform" action="{{ route('penerima.update', $penerima->id) }}" method="POST">
    @method('PUT')
    @csrf
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
                                <label class="form-label @error('nama_depan') is-invalid @enderror">Nama Depan</label>
                                <input type="text" class="form-control" name="nama_depan"
                                    value="{{ old('nama_depan', $penerima->nama_depan) }}">
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
                                    value="{{ old('nama_belakang', $penerima->nama_belakang) }}">
                                @error('nama_belakang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label @error('nik') is-invalid @enderror">Nomor Induk Kependudukan
                            / NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{ old('nik', $penerima->nik) }}">
                        @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label @error('alamat') is-invalid @enderror">Alamat</label>
                        <textarea class="form-control" rows="3"
                            name="alamat">{{ old('alamat', $penerima->alamat) }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label @error('rt') is-invalid @enderror"><b>RT</b></label>
                                <input type="text" class="form-control" name="rt"
                                    value="{{ old('rt', $penerima->rt) }}">
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
                                    RW
                                </label>
                                <input type="text" class="form-control" readonly name="rw"
                                    value="{{ auth()->user()->rw }}">
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
                        <input type="text" class="form-control" readonly name="kelurahan"
                            value="{{ auth()->user()->kelurahan }}">
                        @error('kelurahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label @error('kecamatan') is-invalid @enderror">Kecamatan</label>
                        <input type="text" class="form-control" readonly name="kecamatan"
                            value="{{ auth()->user()->kecamatan }}">
                        @error('kecamatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection