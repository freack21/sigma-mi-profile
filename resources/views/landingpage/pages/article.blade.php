@include('landingpage.layouts.header')

<link rel="stylesheet" href="{{ asset('css/pages/article.css') }}">
<main>
  <section class="hero" data-bg="{{ isset($data) ? $data['image'] : '' }}">
    <div class="hero-content">
      <h1>@yield('article_title', 'Judul Artikel')</h1>
    </div>
  </section>


  <section class="article-content">
    <div class="row">
      <div class="col-12 col-md-{{ isset($other_articles[0]) ? '8' : '12' }}">
        <div class="article-body">
          @yield('article_body', 'Ini adalah contoh artikel!')
        </div>
      </div>

      @if (isset($other_articles[0]))
      <div class="col-12 col-md-3">
        <h1 class="other-title">
          Artikel Lainnya
        </h1>

        @foreach ($other_articles as $other_article)
        <div class="other-card">
          <div class="img">
            <img src="{{ $other_article['image'] ?: 'https://fakeimg.pl/100x100?text=article' }}" alt="">
          </div>
          <div class="body">
            <span>{{ \Carbon\Carbon::parse($other_article['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
            <p>{{ $other_article['title'] ?: 'Artikel Tidak Tersedia' }}</p>
            <a href="{{ $other_article['link'] ?: '' }}" class="link">Selengkapnya &rightarrow;</a>
          </div>
        </div>
        @endforeach
      </div>
      @endif

    </div>
  </section>
</main>

<script>
  const hero = document.querySelectorAll(".hero").forEach(item => {
    const bgImage = item.dataset.bg;
    bgImage && item.style.setProperty('--hero-img', `url('${bgImage}')`);
  });
</script>

@include('landingpage.layouts.footer')