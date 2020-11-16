<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container-fluid">
        <a href="<?= base_url(); ?>" class="navbar-brand">
            <img src="<?= base_url('assets/dist/img/siakad-logo.png') ?>" alt="SIAKAD Logo" class="brand-image">
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Mahasiswa</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Daftar Mahasiswa</a></li>
                        <li><a href="#" class="dropdown-item">Daftar Mahasiswa Hapus</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dosen</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Dosen</a></li>
                        <li><a href="#" class="dropdown-item">Penugasan Dosen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perkuliahan</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Mata Kuliah</a></li>
                        <li><a href="#" class="dropdown-item">Substansi Kuliah</a></li>
                        <li><a href="#" class="dropdown-item">Kurikulum</a></li>
                        <li><a href="#" class="dropdown-item">Kelas Perkuliahan</a></li>
                        <li><a href="#" class="dropdown-item">Nilai Perkuliahan</a></li>
                        <li><a href="#" class="dropdown-item">Aktifitas Kuliah Mahasiswa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pelengkap</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">Skala Nilai</a></li>
                        <li><a href="#" class="dropdown-item">Kapasitas Mahasiswa Baru</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Rekapitulasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pengaturan</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="<?= base_url('pengaturan/pengguna') ?>" class="dropdown-item">Pengguna </a></li>
                        <li><a href="#" class="dropdown-item">Aplikasi</a></li>
                    </ul>
                </li>
            </ul>
        </div> 

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i> <?= session('name') != null ? session('name') : 'User'  ?>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                    <i class="fas fa-cogs"></i> Pengaturan Akun
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                    <i class="fas fa-door-open"></i> Keluar
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>