<!-- Main Navigation Start -->
<nav class="navbar navbar-expand-md bg-transparent">
  <div class="container text-nowrap">
    <div class="d-flex align-items-center w-100 col p-0">
      <a class="navbar-brand rounded-bottom light-bg" href="<?= base_url(); ?>">
        <img src="<?php echo base_url('assets/') ?>images/bpr-logo1.png" alt="">
      </a>
    </div>

    <!-- Toggle Button Start -->
    <button class="navbar-toggler x collapsed nav-link mr-2 ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <!-- Toggle Button End -->

    <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle-mob" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown03">
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/profil'); ?>">Profil Perusahaan</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/sejarah'); ?>">Sejarah</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/visi_misi'); ?>">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/manajemen'); ?>">Board Manajemen</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/struktur_organisasi'); ?>">Struktur Organisasi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/achievement'); ?>">Penghargaan</a></li>
            <li><a class="dropdown-item" href="<?= base_url('tentang_kami/jaringan_kantor'); ?>">Jaringan Kantor</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle-mob" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk dan Layanan <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown03">
            <li><a class="dropdown-item" href="<?= base_url('produk_layanan/mahasiswa'); ?>">Pembayaran Mahasiswa</a></li>
            <li><a class="dropdown-item" href="<?= base_url('produk_layanan/online_payment'); ?>">Online Payment</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle-mob dropdown-item" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Deposito <i class="icofont-rounded-right float-right"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="<?= base_url('produk_layanan/deposito_masyarakat'); ?>" class="dropdown-item">Deposito Masyarakat</a></li>
                <li><a href="<?= base_url('produk_layanan/deposito_aba'); ?>" class="dropdown-item">Deposito Bank Umum</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle-mob dropdown-item" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tabungan <i class="icofont-rounded-right float-right"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="<?= base_url('produk_layanan/tabungan_ku'); ?>" class="dropdown-item">TabunganKu</a></li>
                <li><a href="<?= base_url('produk_layanan/tabungan_sejahtera'); ?>" class="dropdown-item">Tabungan Sejahtera</a></li>
                <li><a href="<?= base_url('produk_layanan/tabungan_umroh'); ?>" class="dropdown-item">Tabungan Umroh</a></li>
                <li><a href="<?= base_url('produk_layanan/tabungan_qurban'); ?>" class="dropdown-item">Tabungan Qurban Warga</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle-mob dropdown-item" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kredit <i class="icofont-rounded-right float-right"></i></a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="<?= base_url('produk_layanan/kredit_bakulan'); ?>" class="dropdown-item">Kredit Bakulan</a></li>
                <li><a href="<?= base_url('produk_layanan/kredit_konsumtif'); ?>" class="dropdown-item">Kredit Konsumtif</a></li>
                <li><a href="<?= base_url('produk_layanan/kredit_modal'); ?>" class="dropdown-item">Kredit Modal Kerja</a></li>
                <li><a href="<?= base_url('produk_layanan/kredit_investasi'); ?>" class="dropdown-item">Kredit Investasi</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle-mob" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('news/artikel'); ?>">Artikel</a></li>
            <li><a class="dropdown-item" href="<?= base_url('news/publikasi'); ?>">Laporan Publikasi</a></li>
            <li><a class="dropdown-item" href="<?= base_url('news/gcg'); ?>">GCG Report</a></li>
            <li><a class="dropdown-item" href="<?= base_url('news/pengkinian_data'); ?>">Pengkinian Data Nasabah</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle-mob" href="<?= base_url('contact'); ?>">Hubungi Kami </a>
        </li>
      </ul>

      <!-- Main Navigation End -->
    </div>
  </div>
</nav>
<!-- Main Navigation End -->