@include('layouts.header')

<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Selamat Datang di <br> Sigma Mutu Indonesia</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt nulla unde dolor vitae nisi aliquid!</p>
      <a href="#" class="btn">Pelajari Lebih Lanjut</a>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="highlight">
            <h1>Jelajahi Layanan dan Jasa PT Sigma Mutu Indonesia</h1>
            <div class="line-light"></div>
            <a href="#" class="btn">Pelajari Lebih Lanjut</a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="file-text" width="48" height="48"></i>
            <h2>Sertifikasi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis harum deserunt pariatur autem qui quisquam.</p>
            <a href="#" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="briefcase" width="48" height="48"></i>
            <h2>Pelatihan</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?</p>
            <a href="#" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="activity" width="48" height="48"></i>
            <h2>Kalibrasi</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis harum deserunt pariatur autem qui quisquam.</p>
            <a href="#" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="check-circle" width="48" height="48"></i>
            <h2>Konsultasi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?</p>
            <a href="#" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="service">
            <i data-feather="shield" width="48" height="48"></i>
            <h2>Pengurusan SNI & TKDN</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est pariatur at expedita rerum officiis voluptate?</p>
            <a href="#" class="link">Pelajari Lebih Lanjut &rightarrow;</i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="articles">
    @include('sections.articles')
  </section>
</main>

@include('layouts.footer')