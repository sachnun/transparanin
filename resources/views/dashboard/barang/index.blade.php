@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
        <p>data barang yang digunakan sebagai bentuk bantuan yang akan dikirim.</p>
    </div>
    <div>
        @if (auth()->user()->is_admin)
        <a href="{{ route('barang.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Barang Baru</span>
        </a>
        @endif
    </div>
</div>

<div class="col-12 col-lg-10 mx-auto">
    <div class="card shadow mb-4">
        <div class="card-body px-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Poster</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col" class="text-center">Jenis</th>
                        @if (auth()->user()->is_admin)
                        <th scope="col"></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 10; $i++) <tr>
                        <th scope="row" class="text-center align-middle">{{ $i }}</th>
                        <td class="text-center">
                            <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/4/9/769000535/769000535_1cb50ed1-829f-4aec-a2bb-8d760d2c713b_1500_1500.jpg"
                                class="img-thumbnail img-fluid" style="height: 75px;">
                        </td>
                        <td class="align-middle">
                            <a href="barang/1" class="text-decoration-none">
                                Beras Gudang Garam
                            </a>
                        </td>
                        <td class="text-center align-middle">Makanan</td>
                        @if (auth()->user()->is_admin)
                        <td class="text-center align-middle">
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink" style="">
                                    <a class="dropdown-item" href="#">Detail</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">Hapus</a>
                                </div>
                            </div>
                        </td>
                        @endif
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection