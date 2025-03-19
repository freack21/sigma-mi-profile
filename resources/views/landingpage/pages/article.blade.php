@include('landingpage.layouts.header')

<link rel="stylesheet" href="{{ asset('css/pages/article.css') }}">
<main>
  <section class="hero">
    <div class="hero-content">
      <h1>@yield('article_title', 'Judul Artikel')</h1>
    </div>
  </section>


  <section class="article-content">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="article-body">
          @yield('article_body', 'Ini adalah contoh artikel!')
        </div>
      </div>
      <div class="col-12 col-md-3">
        <h1 class="other-title">
          Artikel Lainnya
        </h1>
        <div class="other-card">
          <div class="img">
            <img src="https://images.unsplash.com/photo-1503694978374-8a2fa686963a?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
          </div>
          <div class="body">
            <span>21 April 20XX</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, expedita. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut?</p>
            <a href="#" class="link">Selengkapnya &rightarrow;</a>
          </div>
        </div>
        <div class="other-card">
          <div class="img">
            <img src="https://images.unsplash.com/photo-1503694978374-8a2fa686963a?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
          </div>
          <div class="body">
            <span>21 April 20XX</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, expedita. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut?</p>
            <a href="#" class="link">Selengkapnya &rightarrow;</a>
          </div>
        </div>
        <div class="other-card">
          <div class="img">
            <img src="https://images.unsplash.com/photo-1503694978374-8a2fa686963a?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
          </div>
          <div class="body">
            <span>21 April 20XX</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, expedita. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, aut?</p>
            <a href="#" class="link">Selengkapnya &rightarrow;</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@include('landingpage.layouts.footer')