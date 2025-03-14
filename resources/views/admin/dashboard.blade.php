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
  <link rel="stylesheet" href="{{ asset('css/pages/admin.css') }}">
</head>
<body>
  <header>
    <a href="/" class="logo">
      <img src="{{ asset('img/sigma-logo.png') }}" alt="Sigma Logo">
      <img src="{{ asset('img/sigma-tag.png') }}" alt="Sigma Tagline" class="tag">
    </a>
  </header>
  
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3">
        <aside>
          <a class="side-link" href="#" id="dashboardLink"><i data-feather="home" width="18" height="18"></i> Dashboard</a>
          <a class="side-link" href="#" id="articleLink"><i data-feather="file-text" width="18" height="18"></i> Artikel</a>
          <a class="side-link" href="#" id="settingLink"><i data-feather="sliders" width="18" height="18"></i> Personalisasi Web</a>
        </aside>
      </div>
      <div class="col-12 col-md-9">
        <main class="admin-dashboard">
          <section id="dashboardSection">
            @include("admin.sections.home")
          </section>
          <section id="articleSection">
            @include("admin.sections.article")
          </section>
        </main>
      </div>
    </div>
  </div>

  <script>
    var sideLinks = document.querySelectorAll('.side-link');
    var adminSections = document.querySelectorAll('main section');

    sideLinks.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();

        sideLinks.forEach(d => {
          d.classList.remove('active');
        });

        e.target.classList.add('active');

        adminSections.forEach(d => {
          d.style.display = "none"
        })

        document.querySelector(`#${e.target.id.split("Link")[0]}Section`).style.display = 'block';
      })
    })

    document.querySelector(`#dashboardLink`).click();
  </script>

  <script>
    feather.replace();
  </script>
</body>
</html>