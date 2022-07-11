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
                    <p class="text-lg">03-03-2022</p>
                </div>
                <div class="mb-3">
                    <label>Bencana</label>
                    <p class="text-lg">Penyebaran COVID-19</p>
                </div>
                <div class="mb-3">
                    <label>Dampak</label>
                    <p class="text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, molestias.
                    </p>
                </div>
                <div class="mb-3">
                    <label>Status Validasi</label>
                    <p class="text-lg text-warning">Permintaan</p>
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
                    <p class="text-lg">Samsudin Alimawan</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Total RT</label>
                            <p class="text-lg">10</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Total Warga</label>
                            <p class="text-lg">53</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <ul class="list-group list-group-flush">
                        @for ($i = 0; $i < 10; $i++) <li class="list-group-item">RT 003 - Samsul Alam
                            <ul class="mb-2">
                                <li>
                                    <span class="badge badge-secondary badge-pill">14 orang</span>
                                    Keluarga Sub of Second
                                </li>
                                <li>
                                    <span class="badge badge-secondary badge-pill">14 orang</span>
                                    Keluarga Sub of Second
                                </li>
                                <li>
                                    <span class="badge badge-secondary badge-pill">14 orang</span>
                                    Keluarga Sub of Second
                                </li>

                            </ul>
                            </li>
                            @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection