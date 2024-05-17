<nav class="sidebar">
    <div class="sidebar-header">
        <a href="/" class="sidebar-brand">
            Logis<span>thing</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Home</li>
            <li class="nav-item {{ (request()->segment(1) == '') ? 'active' : '' }}">
                <a href="/" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">master</li>
            <li class="nav-item {{ (request()->segment(1) == 'barang') ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
                  <i class="link-icon" data-feather="hard-drive"></i>
                  <span class="link-title">Barang</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ (request()->segment(1) == 'barang') ? 'show' : '' }} {{ (request()->segment(1) == 'satuan') ? 'show' : '' }}" id="tables">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="/barang" class="nav-link {{ (request()->segment(1) == 'barang') ? 'active' : '' }}">Data Barang</a>
                    </li>
                    <li class="nav-item">
                      <a href="/satuan" class="nav-link {{ (request()->segment(1) == 'satuan') ? 'active' : '' }}">Satuan</a>
                    </li>
                  </ul>
                </div>
              </li>
            <li class="nav-item {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
                <a href="user" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">User</span>
                </a>
            </li>
            <li class="nav-item nav-category">Transaksi</li>
            <li class="nav-item {{ (request()->segment(1) == 'barang-masuk') ? 'active' : '' }}">
                <a href="/barang-masuk" class="nav-link">
                    <i class="link-icon" data-feather="log-in"></i>
                    <span class="link-title">Barang Masuk</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'barang-keluar') ? 'active' : '' }}">
                <a href="/barang-keluar" class="nav-link">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Barang Keluar</span>
                </a>
            </li>

            <li class="nav-item nav-category">BPP</li>
            <li class="nav-item {{ (request()->segment(1) == 'bpp-sb' ) ? 'active' : '' }}">
                <a href="/bpp-sb" class="nav-link">
                    <i class="link-icon" data-feather="map"></i>
                    <span class="link-title">Sambungan Baru (SB)</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'bpp-mt') ? 'active' : '' }}">
                <a href="/bpp-mt" class="nav-link">
                    <i class="link-icon" data-feather="wind"></i>
                    <span class="link-title">Perbaikan (MT)</span>
                </a>
            </li>

            <li class="nav-item nav-category">Laporan</li>
            <li class="nav-item {{ (request()->segment(1) == 'laporan-barang-masuk') ? 'active' : '' }}">
                <a href="/laporan-barang-masuk" class="nav-link">
                    <i class="link-icon" data-feather="file-plus"></i>
                    <span class="link-title">Laporan Barang Masuk</span>
                </a>
            </li>
            <li class="nav-item {{ (request()->segment(1) == 'laporan-barang-keluar') ? 'active' : '' }}">
                <a href="/laporan-barang-keluar" class="nav-link">
                    <i class="link-icon" data-feather="file-minus"></i>
                    <span class="link-title">Laporan Barang Keluar</span>
                </a>
            </li>


            <li class="nav-item nav-category">pengaturan</li>
            <li class="nav-item {{ (request()->segment(1) == 'pengaturan') ? 'active' : '' }}">
                <a href="pengaturan" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Manajemen User</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

