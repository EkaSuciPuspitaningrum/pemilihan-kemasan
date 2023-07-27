<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">KEMASAN PRODUK</a>

        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KEMASAN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard_super') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard_super') }}"><i class="fas fa-house"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pustaka Pengetahuan</li>
            <li class="{{ Request::is('pustaka_produk') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pustaka_produk') }}"><i class="fas fa-tag"></i><span>Kriteria Produk</span></a>
            </li>
            <li class="{{ Request::is('pustaka_kemasan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pustaka_kemasan') }}"><i class="fas fa-box"></i><span>Jenis Kemasan</span></a>
            </li>
            <li class="menu-header">Data Pakar</li>
            <li class="{{ Request::is('appr_pakar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('appr_pakar') }}"><i class="fas fa-person-circle-check"></i><span>Approve Pakar</span></a>
            </li>
            <li class="{{ Request::is('data_pakar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data_pakar') }}"><i class="fas fa-user"></i><span>Data Pakar</span></a>
            </li>
            <li class="menu-header">Data Admin</li>
            <li class="{{ Request::is('data_admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data_admin') }}"><i class="fas fa-lock"></i><span>Data Admin</span></a>
            </li>
    </aside>
</div>