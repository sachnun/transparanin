@extends('dashboard.template')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ringkasan</h1>
</div>

<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Bantuan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total['total_bantuan'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Permintaan Bantuan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total['total_permintaan'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hand-holding fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Bantuan Dibatalkan
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total['total_batal'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hand fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Bantuan Terkirim
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total['total_terkirim'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hand-holding-hand fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Approach -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Apa itu TransparIn?
        </h6>
    </div>
    <div class="card-body">
        <p>
            TransparIn (Transparanin Aja) bertujuan untuk memberikan transparansi terhadap bantuan sosial korban bencana
            alam kepada
            masyarakat
            penerima bantuan.
        </p>
        <p>
            Dibuat berdasarkan keresahan bantuan selama Covid-19 yang mana nantinya dapat digunakan sebagai langkah
            penanganan bilamana ada terjadi bencana alam lain atau bahkan pandemi yang membutuhkan pembagian
            bantuan yang terstruktur.
        </p>

    </div>
</div>
@endsection