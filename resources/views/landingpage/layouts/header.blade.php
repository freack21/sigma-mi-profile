<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://unpkg.com/feather-icons"></script>

  <title>{{ $title ?? "Sigma Mutu Indonesia" }}</title>
  <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/navbar/index.css') }}">
</head>
<body>
  <header>
    <div id="desktopMenu">
      <div class="top-menu">
        <a href="/" class="logo">
          <img src="{{ asset('img/sigma-logo.png') }}" alt="Sigma Logo">
          <img src="{{ asset('img/sigma-tag.png') }}" alt="Sigma Tagline" class="tag">
        </a>
        <div class="menu">
          <a href="#">Tentang Kami</a>
          <a href="#" id="search-menu"><i data-feather="search" width="16" height="16"></i> Cari</a>
  
          <div id="searchInput">
            <input type="text" id="inputSearch" placeholder="Cari" />
            <i id="iconSearch" data-feather="search" width="16" height="16"></i>
            <div id="iconCancel">
              <i data-feather="x" width="16" height="16"></i>
            </div>
          </div>
        </div>
      </div>
      <hr/>
      <div class="bot-menu">
        <a href="#" data-list="pengurusanSNI"><p>Pengurusan SNI & TKDN</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
        <a href="#" data-list="sertifikasi"><p>Sertifikasi</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
        <a href="#" data-list="pelatihan"><p>Pelatihan</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
        <a href="#" data-list="kalibrasi"><p>Kalibrasi</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
        <a href="#">Konsultasi & Pembuatan Dokumen Mutu</i></a>
      </div>
  
      <div id="menuList">
        <div class="menu-items" id="menuList-sertifikasi">
          <a href="/service/sertifikasi-9001-2015"><p>ISO 9001:2015</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>ISO 14001:2018</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>ISO 4500:2018</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/sertifikasi-22000-2018"><p>ISO 22000:2018</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>HACCP</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>GMP</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>Sertifikasi Halal</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
        </div>
        <div class="menu-items" id="menuList-pelatihan">
          <a href="#"><p>ISO 9001:2015</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>ISO 14001:2018</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>ISO 4500:2018</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>ISO 22000</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>HACCP</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>GMP</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>Pelatihan Petugas Pengambil Contoh (PPC)</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>Pelatihan Pengujian Produk</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>Pelatihan Kalibrasi</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
        </div>
        <div class="menu-items" id="menuList-kalibrasi">
          <a href="/service/kalibrasi-massa"><p>Massa</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-suhu"><p>Suhu</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-volumetrik"><p>Volume</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-gaya"><p>Gaya</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-kelembaban"><p>Kelembaban & Kelembapan</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-dimensi"><p>Dimensi</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="/service/kalibrasi-kelistrikan"><p>Alat Ukur Listrik</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
        </div>
        <div class="menu-items" id="menuList-pengurusanSNI">
          <a href="#"><p>SNI Produk Ban</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Baja</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Helm</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Pupuk</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Toys</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Produk Elektronik</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Kompor</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
          <a href="#"><p>SNI Produk Makanan & Minuman</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
        </div>
      </div>
    </div>

    <div id="mobileMenu">
      <a href="/" class="logo">
        <img src="{{ asset('img/sigma-logo.png') }}" alt="Sigma Logo">
        <img src="{{ asset('img/sigma-tag.png') }}" alt="Sigma Tagline" class="tag">
      </a>

      <div class="menu">
        <a href="#" id="searchMenuMobile"><i data-feather="search" width="24" height="24"></i></a>
        <div class="hamburger" id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="searchInputMobile">
        <input id="inputSearchMobile" type="text" placeholder="Cari" />
        <i id="iconSearchMobile" data-feather="search" width="24" height="24"></i>
      </div>

      <div class="dropdown-menu" id="dropdownMenu">
        <div class="menu-list">
          <a href="#" data-list="sertifikasi"><p>Sertifikasi</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          <div class="menu-items-mobile" id="menuListMobile-sertifikasi">
            <a href="/service/sertifikasi-9001-2015"><p>ISO 9001:2015</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>ISO 14001:2018</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>ISO 4500:2018</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/sertifikasi-22000-2018"><p>ISO 22000:2018</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>HACCP</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>GMP</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>Sertifikasi Halal</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
          </div>
        </div>
        <div class="menu-list">
          <a href="#" data-list="pelatihan"><p>Pelatihan</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          <div class="menu-items-mobile" id="menuListMobile-pelatihan">
            <a href="#"><p>ISO 9001:2015</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>ISO 14001:2018</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>ISO 4500:2018</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>ISO 22000</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>HACCP</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>GMP</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>Pelatihan Petugas Pengambil Contoh (PPC)</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>Pelatihan Pengujian Produk</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>Pelatihan Kalibrasi</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
          </div>
        </div>
        <div class="menu-list">
          <a href="#" data-list="kalibrasi"><p>Kalibrasi</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          <div class="menu-items-mobile" id="menuListMobile-kalibrasi">
            <a href="/service/kalibrasi-massa"><p>Massa</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-suhu"><p>Suhu</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-volumetrik"><p>Volume</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-gaya"><p>Gaya</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-kelembaban"><p>Kelembaban & Kelembapan</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-dimensi"><p>Dimensi</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="/service/kalibrasi-kelistrikan"><p>Alat Ukur Listrik</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
          </div>
        </div>
        <div class="menu-list">
          <a href="#" data-list="pengurusanSNI"><p>Pengurusan SNI & TKDN</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          <div class="menu-items-mobile" id="menuListMobile-pengurusanSNI">
            <a href="#"><p>SNI Produk Ban</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Baja</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Helm</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Pupuk</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Toys</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Produk Elektronik</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Kompor</p> <i data-feather="chevron-right" width="16" height="16"></i></a>
            <a href="#"><p>SNI Produk Makanan & Minuman</p> <i data-feather="chevron-right" width="16" height="18"></i></a>
          </div>
        </div>
        <div class="menu-list">
          <a href="#">Konsultasi & Dokumen Mutu</i></a>
        </div>
      </div>
    </div>
  </header>
