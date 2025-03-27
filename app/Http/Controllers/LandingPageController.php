<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LandingPageController extends Controller
{

  public function get_galleries($limit = 16)
  {
    $imagePath = public_path('img/gallery');
    $gallery = [];

    if (File::exists($imagePath)) {
      $files = File::files($imagePath);

      foreach ($files as $file) {
        $gallery[] = asset('img/gallery/' . $file->getFilename());
      }
    }
    $gallery = collect($gallery)->shuffle()->take($limit)->values()->all();
    return $gallery;
  }

  public function get_services()
  {
    return [
      "sertifikasi-22000-2018" => ["Sertifikasi ISO 22000:2018", "landingpage.services.sertifikasi.22000-2018-service", "Sertifikasi", "/service/sertifikasi-22000-2018"],
      "sertifikasi-14001-2018" => ["Sertifikasi ISO 14001:2018", "landingpage.services.sertifikasi.14001-2018-service", "Sertifikasi", "/service/sertifikasi-14001-2018"],
      "sertifikasi-45001-2018" => ["Sertifikasi ISO 45001:2018", "landingpage.services.sertifikasi.45001-2018-service", "Sertifikasi", "/service/sertifikasi-45001-2018"],
      "sertifikasi-9001-2015" => ["Sertifikasi ISO 9001:2015", "landingpage.services.sertifikasi.9001-2015-service", "Sertifikasi", "/service/sertifikasi-9001-2015"],
      "sertifikasi-halal" => ["Sertifikasi Halal", "landingpage.services.sertifikasi.halal-service", "Sertifikasi", "/service/sertifikasi-halal"],
      "kalibrasi-gaya" => ["Kalibrasi Gaya", "landingpage.services.kalibrasi.kalibrasi-gaya-service", "Kalibrasi", "/service/kalibrasi-gaya"],
      "kalibrasi-suhu" => ["Kalibrasi Suhu", "landingpage.services.kalibrasi.kalibrasi-suhu-service", "Kalibrasi", "/service/kalibrasi-suhu"],
      "kalibrasi-massa" => ["Kalibrasi Massa", "landingpage.services.kalibrasi.kalibrasi-massa-service", "Kalibrasi", "/service/kalibrasi-massa"],
      "kalibrasi-dimensi" => ["Kalibrasi Dimensi", "landingpage.services.kalibrasi.kalibrasi-dimensi-service", "Kalibrasi", "/service/kalibrasi-dimensi"],
      "kalibrasi-volumetrik" => ["Kalibrasi Volumetrik", "landingpage.services.kalibrasi.kalibrasi-volumetrik-service", "Kalibrasi", "/service/kalibrasi-volumetrik"],
      "kalibrasi-kelembaban" => ["Kalibrasi Kelembaban & Kelembapan", "landingpage.services.kalibrasi.kalibrasi-kelembaban-service", "Kalibrasi", "/service/kalibrasi-kelembaban"],
      "kalibrasi-kelistrikan" => ["Kalibrasi Alat Ukur Listrik", "landingpage.services.kalibrasi.kalibrasi-kelistrikan-service", "Kalibrasi", "/service/kalibrasi-kelistrikan"],
      "pengantian" => ["Pengantian", "landingpage.services.pendaftaran-&-lainnya.pengantian", "Pendaftaran & Lainnya", "/service/pengantian"],
      "pengkajian-gugatan" => ["Pengkajian Gugatan", "landingpage.services.pendaftaran-&-lainnya.pengkajian-gugatan", "Pendaftaran & Lainnya", "/service/pengkajian-gugatan"],
      "prosedur-banding-atau-keluhan" => ["Prosedur Banding atau Keluhan", "landingpage.services.pendaftaran-&-lainnya.prosedur-banding-atau-keluhan", "Pendaftaran & Lainnya", "/service/prosedur-banding-atau-keluhan"],
      "proses-layanan-sertifikasi-iso-9001-2015-iso-14001-2018-iso-45001-2018-iso-22000-2018" => ["Proses Layanan Sertifikasi ISO 9001:2015, ISO 14001:2018, ISO 45001:2018, ISO 22000:2018", "landingpage.services.pendaftaran-&-lainnya.proses-layanan-sertifikasi-iso-9001-2015-iso-14001-2018-iso-45001-2018-iso-22000-2018", "Pendaftaran & Lainnya", "/service/proses-layanan-sertifikasi-iso-9001-2015-iso-14001-2018-iso-45001-2018-iso-22000-2018"],
      "pendaftaran-sertifikasi-halal" => ["Pendaftaran Sertifikasi Halal", "landingpage.services.pendaftaran-&-lainnya.pendaftaran-sertifikasi-halal", "Pendaftaran & Lainnya", "/service/pendaftaran-sertifikasi-halal"],
      "proses-layanan-kalibrasi" => ["Proses Layanan Kalibrasi", "landingpage.services.pendaftaran-&-lainnya.proses-layanan-kalibrasi", "Pendaftaran & Lainnya", "/service/proses-layanan-kalibrasi"],
    ];
  }

  public function get_articles()
  {
    return [
      [
        "title" => "Pelatihan PPC Pupuk di Dinas Pertanian dan Perkebunan Makassar",
        "link" => "/article/pelatihan-ppc-pupuk-di-dinas-pertanian-dan-perkebunan-makassar",
        "image" => asset('img/gallery/IMG-20250324-WA0018.jpg'),
        "created_at" => "2025-03-25",
      ],
    ];
  }

  public function home()
  {
    $articles = $this->get_articles();

    $title = "Beranda | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.home', compact('title', 'articles'));
  }

  public function tentang()
  {
    $gallery = $this->get_galleries();

    $title = "Tentang Kami | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.tentang-kami', compact('title', 'gallery'));
  }

  public function kalibrasi()
  {
    $other_services = collect($this->get_services())->shuffle()->take(5)->values()->all();

    $title = "Kalibrasi | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.kalibrasi', compact('title', 'other_services'));
  }

  public function sertifikasi()
  {
    $other_services = collect($this->get_services())->shuffle()->take(5)->values()->all();

    $title = "Sertifikasi | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.sertifikasi', compact('title', 'other_services'));
  }

  public function articles()
  {
    $gallery = $this->get_galleries(9);
    $articles = $this->get_articles();

    $title = "Daftar Artikel | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.articles', compact('title', 'articles', 'gallery'));
  }

  public function article($slug)
  {
    $articles = [
      "pelatihan-ppc-pupuk-di-dinas-pertanian-dan-perkebunan-makassar" => [
        "title" => "Pelatihan PPC Pupuk di Dinas Pertanian dan Perkebunan Makassar",
        "link" => "/article/pelatihan-ppc-pupuk-di-dinas-pertanian-dan-perkebunan-makassar",
        "view" => "landingpage.articles.pelatihan-ppc-pupuk-di-dinas-pertanian-dan-perkebunan-makassar-article",
        "image" => asset('img/gallery/IMG-20250324-WA0018.jpg'),
        "created_at" => "0001-01-01",
      ],
    ];

    $data = $articles[$slug] ?? [
      "title" => "Artikel tidak ditemukan!",
      "link" => "/article",
      "view" => "landingpage.pages.article",
      "image" => "",
    ];
    $title = $data['title'] . " | PT. Sigma Mutu Indonesia";

    $other_articles = array_values(array_filter($articles, fn($key) => $key !== $slug, ARRAY_FILTER_USE_KEY));
    $other_articles = collect($other_articles)->shuffle()->take(3)->values()->all();

    return view($data['view'], compact('title', 'data', 'other_articles'));
  }

  public function service($slug)
  {
    $services = $this->get_services();

    $data = $services[$slug] ?? ['Artikel tidak ditemukan!', 'landingpage.pages.article', 'Default'];

    $other_services = array_values(array_filter($services, fn($key) => $key !== $slug, ARRAY_FILTER_USE_KEY));
    $other_services = collect($other_services)->shuffle()->take(5)->values()->all();

    $title = $data[0] . " | PT. Sigma Mutu Indonesia";
    return view($data[1], compact('title', 'other_services'));
  }
}
