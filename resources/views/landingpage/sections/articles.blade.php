<div class="container">
  <div class="section-header">
    <div class="section-title">
      <h1>Artikel Terbaru</h1>
      <div class="line-light"></div>
    </div>
    <a href="#" class="link">Lihat Semua Artikel &rightarrow;</a>
  </div>

  @php
  $headnews = isset($articles[0]) ? $articles[0] : [];
  $secondnews = isset($articles[1]) ? $articles[1] : [];
  $thirdnews = isset($articles[2]) ? $articles[2] : [];
  @endphp
  <div id="article-desktop">
    <div class="row">

      @if (isset($headnews['title']))
      <div class="col-{{ isset($secondnews['title']) ? '6' : '12' }}">
        <a href="{{ $headnews['link'] ?: '#' }}" id="headnews" data-bg="{{ $headnews['image'] ?: 'https://fakeimg.pl/200x200?text=article' }}">
          <h3>{{ $headnews['title'] ?: 'Artikel Tidak Tersedia' }}</h3>
          <p>{{ \Carbon\Carbon::parse($headnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</p>
        </a>
      </div>
      @else
      <div class="col-12">
        <a href="#" id="headnews" data-bg="">
          <h3>Artikel Tidak Tersedia</h3>
          <p>{{ \Carbon\Carbon::parse('0001-01-01')->translatedFormat('d F Y') }}</p>
        </a>
      </div>
      @endif

      @if (isset($secondnews['title']))
      <div class="col-6">
        <div id="othernews">
          <a href="{{ $secondnews['link'] ?: '' }}" id="secondnews" class="other-news" style="flex: 0 0 {{ isset($thirdnews['title']) ? '50%' : '100%' }}">
            <div class="img">
              <img src="{{ $secondnews['image'] ?: (isset($thirdnews['title']) ? 'https://fakeimg.pl/200x150?text=article' : 'https://fakeimg.pl/400x150?text=article') }}" alt="News Image">
            </div>
            <div class="content">
              <span>{{ \Carbon\Carbon::parse($secondnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
              <h4 class="title">{{ $secondnews['title'] ?: 'Artikel Tidak Tersedia' }}</h4>
            </div>
          </a>

          @if (isset($thirdnews['title']))
          <a href="{{ $thirdnews['link'] ?: '' }}" id="thirdnews" class="other-news">
            <span>{{ \Carbon\Carbon::parse($thirdnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
            <h3 class="title">{{ $thirdnews['title'] ?: 'Artikel Tidak Tersedia' }}</h3>
          </a>
          @endif

        </div>
      </div>
      @endif

    </div>
  </div>

  <div id="article-mobile">

    @if (isset($headnews['title']))
    <div class="other-news">
      <div class="img">
        <img src="{{ $headnews['image'] ?: 'https://fakeimg.pl/200x200?text=article' }}" alt="News Image">
      </div>
      <div class="content">
        <span>{{ \Carbon\Carbon::parse($headnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
        <h4 class="title">{{ $headnews['title'] ?: 'Artikel Tidak Tersedia' }}</h4>
      </div>
    </div>
    @else
    <div class="other-news">
      <div class="img">
        <img src="https://fakeimg.pl/200x200?text=article" alt="News Image">
      </div>
      <div class="content">
        <span>{{ \Carbon\Carbon::parse('0001-01-01')->translatedFormat('d F Y') }}</span>
        <h4 class="title">Artikel Tidak Tersedia</h4>
      </div>
    </div>
    @endif

    @if (isset($secondnews['title']))
    <div class="other-news">
      <div class="img">
        <img src="{{ $secondnews['image'] ?: 'https://fakeimg.pl/200x150?text=article' }}" alt="News Image">
      </div>
      <div class="content">
        <span>{{ \Carbon\Carbon::parse($secondnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
        <h4 class="title">{{ $secondnews['title'] ?: 'Artikel Tidak Tersedia' }}</h4>
      </div>
    </div>
    @endif

    @if (isset($thirdnews['title']))
    <div class="other-news">
      <div class="img">
        <img src="{{ $thirdnews['image'] ?: 'https://fakeimg.pl/200x150?text=article' }}" alt="News Image">
      </div>
      <div class="content">
        <span>{{ \Carbon\Carbon::parse($thirdnews['created_at'] ?: '0001-01-01')->translatedFormat('d F Y') }}</span>
        <h4 class="title">{{ $thirdnews['title'] ?: 'Artikel Tidak Tersedia' }}</h4>
      </div>
    </div>
    @endif

  </div>
</div>

<script>
const headnews = document.querySelectorAll("#headnews").forEach(item => {
  const bgImage = item.dataset.bg;
  bgImage && item.style.setProperty('--headnews-img', `url('${bgImage}')`);
});
</script>