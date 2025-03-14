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
  <link rel="stylesheet" href="{{ asset('css/pages/login.css') }}">
</head>

<body>
  <header>
    <a href="/" class="logo">
      <img src="{{ asset('img/sigma-logo.png') }}" alt="Sigma Logo">
      <img src="{{ asset('img/sigma-tag.png') }}" alt="Sigma Tagline" class="tag">
    </a>
  </header>

  <main>
    <div class="container">
      <div class="title">
        <h2>Login</h2>
        <p>Manage our landing page!</p>
      </div>

      @if (session()->get('fail'))
        <p id="warningSign"><i data-feather="alert-triangle" width="18" height="18"></i> {{ session()->get('fail') }}</p>
      @else
        <div class="mt-2"></div>
      @endif

      <form id="loginForm" class="login-input" method="post" action="{{url('admin/do-login')}}">
        @csrf
        <div class="input-group">
          <label for='email'>E-mail</label>
          <input type='text' name='email' id='email' placeholder="example@gmail.com">
        </div>
        <div class="input-group">
          <label for='password'>Kata Sandi</label>
          <input type='password' name='password' id='password' placeholder="*****">
        </div>
        <button class="btn">Login</button>
      </form>
    </div>
  </main>

  <script>
    feather.replace();
  </script>
</body>
</html>