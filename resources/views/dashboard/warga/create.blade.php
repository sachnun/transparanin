@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Penerima</h1>
        <p>data penerima bantuan kepada warga di setiap rukun tetangga.</p>
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

<div class="card mb-4 border-left-primary">
    <div class="card-body">
        Akun terdaftar sebagai ketua RW <b>{{ auth()->user()->rw }}</b>
        di kelurahan/desa <b>{{auth()->user()->kelurahan }}</b>.
    </div>
</div>

<form id="myform" action="{{ route('penerima.warga.store', $penerima->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Warga</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="mb-3">
                                <label class="form-label @error('kepala_keluarga') is-invalid @enderror">Kepala
                                    Keluarga</label>
                                <input type="text" class="form-control" name="kepala_keluarga"
                                    value="{{ old('kepala_keluarga') }}">
                                @error('kepala_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3">
                                <label class="form-label @error('anggota_keluarga') is-invalid @enderror">
                                    <b>Anggota Keluarga</b>
                                </label>
                                <input type="number" min="1" class="form-control" name="anggota_keluarga"
                                    value="{{ old('anggota_keluarga', 1) }}">
                                <small>*termasuk kepala keluarga</small>

                                @error('anggota_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label @error('kk') is-invalid @enderror">Nomor Kartu Keluarga
                            / KK</label>
                        <input type="text" class="form-control" name="kk" value="{{ old('kk') }}">
                        @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
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
                                <input type="text" class="form-control" readonly name="rt" value="{{ $penerima->rt }}">
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
                                <input type="text" class="form-control" readonly name="rw" value="{{ $penerima->rw }}">
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
                            value="{{ $penerima->kelurahan }}">
                        @error('kelurahan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label @error('kecamatan') is-invalid @enderror">Kecamatan</label>
                        <input type="text" class="form-control" readonly name="kecamatan"
                            value="{{ $penerima->kecamatan }}">
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