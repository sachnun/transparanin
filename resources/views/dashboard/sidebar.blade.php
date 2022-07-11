<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('ringkasan') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-handshake-angle"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-capitalize">TransparIn</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('ringkasan') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ringkasan</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Bantuan
    </div>

    @php
    $active = Request::is('dashboard/bantuan/*') ? true : false;
    @endphp
    <li class="nav-item {{ $active ? 'active' : '' }}">
        <a class="nav-link {{ $active ? '' : 'collapsed' }}" href="#" data-toggle="collapse"
            data-target="#collapseBantuan" aria-expanded="{{ $active ? '' : 'false' }}" aria-controls="collapseBantuan">
            <i class="fas fa-fw fa-hand-holding-medical"></i>
            <span>Input Bantuan</span>
        </a>
        <div id="collapseBantuan" class="collapse {{ $active ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/bantuan/barang*') ? 'active' : '' }}"
                    href="{{ route('barang.index') }}">Barang</a>
                <a class="collapse-item {{ Request::is('dashboard/bantuan/penerima*') ? 'active' : '' }}"
                    href="{{ route('penerima.index') }}">Penerima</a>
            </div>
        </div>
    </li>

    @if (!auth()->user()->is_admin)
    <li class="nav-item {{ Request::is('dashboard/track*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('track.index') }}">
            <i class="fas fa-fw fa-hand-holding-hand"></i>
            <span>Tracking</span></a>
    </li>
    @endif

    @if(auth()->user()->is_admin)
    @php
    $active = Request::is('dashboard/validasi/*') ? true : false;
    @endphp
    <li class="nav-item {{ $active ? 'active' : '' }}">
        <a class="nav-link {{ $active ? '' : 'collapsed' }}" href="#" data-toggle="collapse"
            data-target="#collapseValidasi" aria-expanded="{{ $active ? '' : 'false' }}"
            aria-controls="collapseValidasi">
            <i class="fas fa-fw fa-list-check"></i>
            <span>Validasi</span>
        </a>
        <div id="collapseValidasi" class="collapse {{ $active ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/validasi/permintaan*') ? 'active' : '' }}"
                    href="{{ route('validasi.permintaan') }}">Permintaan</a>
                <a class="collapse-item {{ Request::is('dashboard/validasi/terkirim*') ? 'active' : '' }}"
                    href="{{ route('validasi.terkirim') }}">Terkirim</a>
                <a class="collapse-item {{ Request::is('dashboard/validasi/batal*') ? 'active' : '' }}"
                    href="{{ route('validasi.batal') }}">Batal</a>
            </div>
        </div>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengguna
    </div>

    @if (auth()->user()->is_admin)
    <li class="nav-item {{ Request::is('dashboard/akun*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('akun.index') }}">
            <i class="fas fa-fw fa-user-gear"></i>
            <span>Akun</span></a>
    </li>
    @endif

    <li class="nav-item {{ Request::is('dashboard/activity*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('activity') }}">
            <i class="fas fa-fw fa-clock-rotate-left"></i>
            <span>Activity</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->