<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SKP Sembalun</div>
    </a>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('jenisBansos.index') }}">Jenis Bansos</a>
                <a class="collapse-item" href="{{ route('alternatif.index') }}">Alternatif</a>
                <a class="collapse-item" href="{{ route('kriteria.index') }}">Kriteria</a>
                <a class="collapse-item" href="{{ route('sub_kriteria.index') }}">Sub Kriteria</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('alternatif_bansos.index') }}">Alternatif Bansos</a>
                <a class="collapse-item" href="{{ route('kriteria_bansos.index') }}">Kriteria Bansos</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('perbandingan_kriteria.index') }}">
            <i class="fas fa-chart-line"></i>
            <span>Perhitungan SPK</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('report_spk.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Report</span></a>
    </li>
    @if (Auth::user()->roles=="ADMIN")
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span></a>
        </li>
    @endif
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
