<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">KEMASAN PRODUK</a>

        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard_pakar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard_pakar') }}"><i class="fas fa-house"></i><span>Dashboard</span></a>
            </li>

            <li class="menu-header">Pustaka Produk</li>
            <li class="{{ Request::is('pustaka_produk') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pustaka_produk') }}"><i class="fas fa-tag"></i><span>Kriteria Produk</span></a>
            </li>
            <li class="menu-header">Pustaka Kemasan</li>
            <li class="{{ Request::is('pustaka_kemasan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pustaka_kemasan') }}"><i class="fas fa-box"></i><span>Jenis Kemasan</span></a>
            </li>
            <li class="menu-header">Pengetahuan</li>
            <li class="{{ Request::is('aturan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('aturan') }}"><i class="fas fa-book-open"></i><span>Basis Pengetahuan Kemasan</span></a>
            </li>

            <li class="menu-header">Tentang</li>
            <li class="{{ Request::is('tentang') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pakar_metode') }}"><i class="fas fa-solid fa-circle-exclamation"></i><span>Penjelasan Metode</span></a>
            </li>
        </ul>
    </aside>
</div>