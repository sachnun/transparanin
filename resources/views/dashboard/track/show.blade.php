@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Tracking</h1>
        <p>tracking / pantau status validasi bantuan.</p>
    </div>
    <div>

    </div>
</div>

<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Tanggal Permintaan</label>
                    <p class="text-lg">{{ $bantuan->created_at }}</p>
                </div>
                <div class="mb-3">
                    <label>Bencana</label>
                    <p class="text-lg">{{ $bantuan->bencana }}</p>
                </div>
                <div class="mb-3">
                    <label>Dampak</label>
                    <p class="text-lg">{{ $bantuan->dampak }}</p>
                </div>
                <div class="mb-3">
                    <label>Status Validasi</label>
                    @if($bantuan->status == 'permintaan')
                    <p class="text-lg text-warning">Permintaan</p>
                    @elseif ($bantuan->status == 'terkirim')
                    <p class="text-lg text-primary">Terkirim</p>
                    @elseif ($bantuan->status == 'batal')
                    <p class="text-lg text-danger">Batal</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Penerima</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label>Ketua RW</label>
                    <p class="text-lg">
                        {{ $bantuan->user->nama_depan }}
                        {{ $bantuan->user->nama_belakang }}
                    </p>
                </div>
                <div class="mb-3">
                    <label>Kelurahan / Desa</label>
                    <p class="text-lg">
                        {{ $bantuan->user->kelurahan }}
                    </p>
                </div>
                <div class="mb-3">
                    <label>Kecamatan</label>
                    <p class="text-lg">
                        {{ $bantuan->user->kecamatan }}
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Total RT</label>
                            <p class="text-lg">{{ $bantuan->total_rt }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Total Warga</label>
                            <p class="text-lg">{{ $bantuan->total_warga }}</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <ul class="list-group list-group-flush">
                        @foreach (json_decode($bantuan->data_penerima) as $penerima)
                        <li class="list-group-item">
                            RT {{ $penerima->rt }} - {{ $penerima->nama_depan }} {{ $penerima->nama_belakang }}
                            <ul class="mb-2">
                                @foreach ($penerima->wargas as $warga)
                                <li>
                                    <span class="badge badge-secondary badge-pill">{{ $warga->anggota_keluarga }}
                                        orang</span>
                                    {{ $warga->kepala_keluarga }}
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection