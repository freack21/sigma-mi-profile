@include('landingpage.layouts.header')

<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Selamat Datang di <br> PT. Sigma Mutu Indonesia</h1>
      <p>Konsultasi di bidang ketenagakerjaan dan outsourcing, serta penerapan sistem manajemen mutu berbasis standar ISO 9001.</p>
      <a href="/tentang" class="btn">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  @php
  $services = [
    "Sertifikasi" => [
      "icon" => "file-text",
      "desc" => "Melakukan sertifikasi ISO 22000:2018, ISO 14001:2018, ISO 45001:2018, ISO 9001:2015, dan Sertifikasi Halal untuk organisasi anda.",
      "href" => null,
    ],
    "Kalibrasi" => [
      "icon" => "activity",
      "desc" => "Kalibrasi adalah proses untuk memastikan bahwa instrumen atau alat ukur berfungsi dengan benar dan memberikan hasil yang akurat sesuai dengan standar yang telah ditentukan.",
      "href" => "/service/kalibrasi",
    ],
    // "Pelatihan" => [
    //   "icon" => "briefcase",
    //   "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?",
    //   "href" => null,
    // ],
    // "Konsultasi" => [
    //   "icon" => "check-circle",
    //   "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?",
    //   "href" => null,
    // ],
    // "Pengurusan SNI & TKDN" => [
    //   "icon" => "shield",
    //   "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?",
    //   "href" => null,
    // ],
  ];
  @endphp

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="highlight">
            <h1>Jelajahi Layanan dan Jasa PT Sigma Mutu Indonesia</h1>
            <div class="line-light"></div>
            <a href="/tentang" class="btn">Pelajari Lebih Lanjut</a>
          </div>
        </div>
        @foreach ($services as $service => $data)
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="{{ $data['icon'] }}" width="48" height="48"></i>
            <h2>{{ $service }}</h2>
            <p>{{ $data['desc'] }}</p>
            <a href="{{ $data['href'] ?: '#' }}" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="articles">
    @include('landingpage.sections.articles')
  </section>
</main>

@include('landingpage.layouts.footer')