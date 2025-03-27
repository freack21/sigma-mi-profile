<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src="https://unpkg.com/feather-icons"></script>

  <title>{{ $title ?? 'Company Profile | PT. Sigma Mutu Indonesia' }}</title>

  <meta name="description" content="{{ $meta_description ?? 'PT. Sigma Mutu Indonesia Company Profile Website' }}">
  <meta name="keywords" content="{{ $meta_keywords ?? 'company, profile, PT Sigma Mutu Indonesia, sigma, mutu, sigmami' }}">
  <meta name="author" content="PT. Sigma Mutu Indonesia">
  <meta name="robots" content="index, follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="{{ $title ?? 'Company Profile | PT. Sigma Mutu Indonesia' }}">
  <meta property="og:description" content="{{ $meta_description ?? 'PT. Sigma Mutu Indonesia Company Profile Website' }}">
  <meta property="og:image" content="{{ $meta_image ?? asset('img/sigma-logo.png') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $title ?? 'Company Profile | PT. Sigma Mutu Indonesia' }}">
  <meta name="twitter:description" content="{{ $meta_description ?? 'PT. Sigma Mutu Indonesia Company Profile Website' }}">
  <meta name="twitter:image" content="{{ $meta_image ?? asset('img/sigma-logo.png') }}">

  <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/navbar/index.css') }}">
</head>
<body>
  @php
  $parent_menus = [
    // "Pengurusan SNI & TKDN" => "pengurusanSNI",
    "Sertifikasi" => "sertifikasi",
    // "Pelatihan" => "pelatihan",
    "Kalibrasi" => "kalibrasi",
    "Pendaftaran & Lainnya" => "pendaftaran-&-lainnya",
    // "Konsultasi & Pembuatan Dokumen Mutu" => null,
  ];

  $child_menus = [
    "Pengurusan SNI & TKDN" => [
      "SNI Produk Ban" => null,
      "SNI Baja" => null,
      "SNI Helm" => null,
      "SNI Pupuk" => null,
      "SNI Toys" => null,
      "SNI Produk Elektronik" => null,
      "SNI Kompor" => null,
      "SNI Produk Makanan & Minuman" => null,
    ],
    "Sertifikasi" => [
      "ISO 9001:2015" => "/service/sertifikasi-9001-2015",
      "ISO 14001:2018" => "/service/sertifikasi-14001-2018",
      "ISO 45001:2018" => "/service/sertifikasi-45001-2018",
      "ISO 22000:2018" => "/service/sertifikasi-22000-2018",
      "Sertifikasi Halal" => "/service/sertifikasi-halal",
    ],
    "Pelatihan" => [
      "ISO 9001:2015" => null,
      "ISO 14001:2018" => null,
      "ISO 4500:2018" => null,
      "ISO 22000" => null,
      "HACCP" => null,
      "GMP" => null,
      "Pelatihan Petugas Pengambil Contoh (PPC)" => null,
      "Pelatihan Pengujian Produk" => null,
      "Pelatihan Kalibrasi" => null,
    ],
    "Kalibrasi" => [
      "Massa" => "/service/kalibrasi-massa",
      "Suhu" => "/service/kalibrasi-suhu",
      "Volume" => "/service/kalibrasi-volumetrik",
      "Gaya" => "/service/kalibrasi-gaya",
      "Kelembaban & Kelembapan" => "/service/kalibrasi-kelembaban",
      "Dimensi" => "/service/kalibrasi-dimensi",
      "Alat Ukur Listrik" => "/service/kalibrasi-kelistrikan",
    ],
    "Pendaftaran & Lainnya" => [
      "Pendaftaran Sertifikasi Halal" => "/service/pendaftaran-sertifikasi-halal",
      "Proses Layanan Sertifikasi ISO 9001:2015, ISO 14001:2018, ISO 45001:2018, ISO 22000:2018" => "/service/proses-layanan-sertifikasi-iso-9001-2015-iso-14001-2018-iso-45001-2018-iso-22000-2018",
      "Proses Layanan Kalibrasi" => "/service/proses-layanan-kalibrasi",
      "Prosedur Banding atau Keluhan" => "/service/prosedur-banding-atau-keluhan",
      "Pengkajian Gugatan" => "/service/pengkajian-gugatan",
      "Pengantian" => "/service/pengantian",
    ],
  ];
  @endphp

  <header>
    <div id="desktopMenu">
      <div class="top-menu">
        <a href="/" class="logo">
          <img src="{{ asset('img/sigma-logo.png') }}" alt="Sigma Logo">
          <img src="{{ asset('img/sigma-tag.png') }}" alt="Sigma Tagline" class="tag">
        </a>
        <div class="menu">
          <a href="/tentang">Tentang Kami</a>
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
        @foreach ($parent_menus as $menus => $data_list)
          @if ($data_list)
          <a href="#" class="parent-menu" data-list="{{ $data_list }}"><p>{{ $menus }}</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          @else
          <a href="#">{{ $menus }}</a>
          @endif
        @endforeach
      </div>

      <div id="menuList">
        @foreach ($child_menus as $parent => $menus)
          @if (key_exists($parent, $parent_menus))
          <div class="menu-items" id="menuList-{{ $parent_menus[$parent] }}">
            @foreach ($menus as $menu => $link)
            <a href="{{ $link ?: '#' }}"><p>{{ $menu }}</p> <i data-feather="chevron-right" width="18" height="18"></i></a>
            @endforeach
          </div>
          @endif
        @endforeach
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
        @foreach ($parent_menus as $parent => $data_list)
        <div class="menu-list">
          @if ($data_list)
          <a href="#" class="parent-menu" data-list="{{ $data_list }}"><p>{{ $parent }}</p> <div class="icon-selected-menu"><i data-feather="chevron-right" width="16" height="16"></i></div></a>
          <div class="menu-items-mobile" id="menuListMobile-{{ $data_list }}">
            @foreach ($child_menus[$parent] as $menu => $link)
            <a href="{{ $link ?: '#' }}">{{ $menu }}</a>
            @endforeach
          </div>
          @else
          <a href="{{ $child_menus[$parent] ?: '#' }}">{{ $parent }}</a>
          @endif
        </div>
        @endforeach
        <div class="menu-list">
          <a href="/tentang" style="text-transform:capitalize;">Tentang Kami</a>
        </div>
      </div>
    </div>
  </header>
