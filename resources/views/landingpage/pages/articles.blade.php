@include('landingpage.layouts.header')

<link rel="stylesheet" href="{{ asset('css/pages/article.css') }}">
<main>
  <section class="hero">
    <div class="hero-content">
      <h1>Daftar Artikel</h1>
    </div>
  </section>

  <section class="article-content">
    <div class="row">
      <div class="col-12 col-md-7">
        <div class="article-body">

          @foreach ($articles as $article)
          <a href="{{ $article['link'] ?: '' }}" class="article-list">
            <div class="image">
              <img src="{{ $article['image'] ?: 'https://fakeimg.pl/200x200?text=article' }}" alt="">
            </div>
            <div class="body">
              <span>{{ \Carbon\Carbon::parse($article['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
              <p>{{ $article['title'] }}</p>
            </div>
          </a>
          @endforeach

        </div>
      </div>

      <div class="col-12 col-md-5 gallery">
        <h1 class="other-title">
          Galeri
        </h1>

        <div class="row">
          @foreach ($gallery as $img)
          <a target="_blank" href="{{ $img }}" class="col-6 col-md-4">
            <img src="{{ $img }}" alt="Gallery Image" loading="lazy">
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </section>
</main>

@include('landingpage.layouts.footer')