<footer>
  <div class="top-footer">
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#333" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,90.7C384,117,480,171,576,181.3C672,192,768,160,864,128C960,96,1056,64,1152,58.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg> --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#333" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,96C384,85,480,75,576,74.7C672,75,768,85,864,112C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="footer-contact mt-sm-4">
          <h3>MAIN OFFICE</h3>
          <p>Jl. Cendrawasih Raya No. 219 b, Rt.7/Rw.6,</p>
          <p>Cengkaraeng, Jakarta Barat 11730</p>
        </div>
        <div class="footer-contact mt-4">
          <h3>LABORATORIUM & SERTIFIKASI</h3>
          <p>Ceka Office, Mitra Gading Villa</p>
          <p>Jl. Kelapa Hibrida, Blok G1, No.03, Kelapa Gading</p>
          <p>Jakarta Utara 12420</p>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.073013073073!2d112.7573663147737!3d-7.303000994733073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b1b1b1b1b1%3A0x2b7b1b1b1b1b1b1!2sPT%20Sigma%20Mutu%20Indonesia!5e0!3m2!1sen!2sid!4v1618223660001!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div class="socials">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <a class="social-media" href="https://www.instagram.com/pt.sigmamutuindonesia" target="_blank">
            <i data-feather="instagram" width="18" height='18'></i>
            <p>{{ "@" }}pt.sigmamutuindonesia</p>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <a class="social-media" href="mailto:sigmamutuindonesia@gmail.com" target="_blank">
            <i data-feather="mail" width="18" height='18'></i>
            <p>sigmamutuindonesia@gmail.com</p>
          </a>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <a class="social-media" href="https://wa.me/6281210348333" target="_blank">
            <i data-feather="phone" width="18" height='18'></i>
            <p>(+62) 812-1034-8333</p>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <p class="bottom-footer">&copy; {{ date('Y') }} PT Sigma Mutu Indonesia. All Rights Reserved.</p>
  </div>
</footer>

<script src="{{ asset('js/header-desktop.js') }}"></script>
<script src="{{ asset('js/hamburger-menu.js') }}"></script>

<script src="{{ asset('js/search-menu-desktop.js') }}"></script>
<script src="{{ asset('js/menu-list-desktop.js') }}"></script>

<script src="{{ asset('js/search-menu-mobile.js') }}"></script></script>
<script src="{{ asset('js/menu-list-mobile.js') }}"></script>

<script>
  feather.replace();
</script>
</body>
</html>