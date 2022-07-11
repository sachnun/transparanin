@extends('dashboard.template')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
        <p>data barang yang digunakan sebagai bentuk bantuan yang akan dikirim.</p>
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
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink" style="">
                        <a class="dropdown-item" href="#">Edit</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Hapus</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="mb-3">
                    <label>Nama Barang</label>
                    <p class="text-lg">test</p>
                </div>
                <div class="mb-3">
                    <label>Jenis Barang</label>
                    <p class="text-lg">Makanan</p>
                </div>
                <div class="mb-3">
                    <label>Harga Satuan</label>
                    <p class="text-lg">Rp. 2000</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label>Tersedia</label>
                            <p class="text-lg">3000</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Terkirim</label>
                            <p class="text-lg">3000</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Total</label>
                            <p class="text-lg">3000</p>
                        </div>
                    </div>
                </div>


                <div class="mb-3">
                    <label>Keterangan</label>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquam cum nesciunt
                        nam sequi velit sapiente blanditiis magnam. Voluptatibus ut laboriosam beatae. Repellat, autem!
                        Facere tempora accusamus excepturi neque atque!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection