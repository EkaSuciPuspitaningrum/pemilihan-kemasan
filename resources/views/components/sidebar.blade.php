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
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}"><i class="fas fa-house"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Pencarian Kemasan</li>
            <li class="{{ Request::is('cari') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('cari') }}"><i class="fas fa-magnifying-glass"></i><span>Pencarian Kemasan</span></a>
            </li>
            <li class="menu-header">Riwayat Pencarian</li>
            <li class="{{ Request::is('history') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('history') }}"><i class="fas fa-database"></i><span>Riwayat Pencarian</span></a>
            </li>
            <li class="menu-header">Tentang</li>
            <li class="{{ Request::is('tentang') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('user_metode') }}"><i class="fas fa-solid fa-circle-exclamation"></i><span>Penjelasan Metode</span></a>
            </li>
    </aside>
</div>