<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
  public function home()
  {
    $articles = [
      [
        "title" => "Pelatihan PPC Pupuk di Dinas Pertanian dan Perkebunan Makassar",
        "link" => "/article/pelatihan-ppc-pupuk-di-dinas-pertanian-dan-perkebunan-makassar",
        "image" => asset('img/gallery/IMG-20250324-WA0018.jpg'),
        "created_at" => "0001-01-01",
      ],
    ];

    $title = "Beranda | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.home', compact('title', 'articles'));
  }

  public function tentang()
  {
    $title = "Tentang Kami | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.tentang-kami', compact('title'));
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
      "title" => "Artikel",
      "link" => "/article",
      "view" => "landingpage.pages.article",
      "image" => "",
    ];
    $title = $data['title'] . " | PT. Sigma Mutu Indonesia";

    $other_articles = array_values(array_filter($articles, fn($key) => $key !== $slug, ARRAY_FILTER_USE_KEY));
    $other_articles = array_slice($other_articles, 0, 3);

    return view($data['view'], compact('title', 'data', 'other_articles'));
  }

  public function service($slug)
  {
    $slugs = [
      "sertifikasi-22000-2018" => ["Sertifikasi ISO 22000:2018", "landingpage.services.sertifikasi.22000-2018-service"],
      "sertifikasi-14001-2018" => ["Sertifikasi ISO 14001:2018", "landingpage.services.sertifikasi.14001-2018-service"],
      "sertifikasi-45001-2018" => ["Sertifikasi ISO 45001:2018", "landingpage.services.sertifikasi.45001-2018-service"],
      "sertifikasi-9001-2015" => ["Sertifikasi ISO 9001:2015", "landingpage.services.sertifikasi.9001-2015-service"],
      "sertifikasi-halal" => ["Sertifikasi Halal", "landingpage.services.sertifikasi.halal-service"],
      "kalibrasi" => ["Kalibrasi", "landingpage.pages.kalibrasi"],
      "kalibrasi-gaya" => ["Kalibrasi Gaya", "landingpage.services.kalibrasi.kalibrasi-gaya-service"],
      "kalibrasi-suhu" => ["Kalibrasi Suhu", "landingpage.services.kalibrasi.kalibrasi-suhu-service"],
      "kalibrasi-massa" => ["Kalibrasi Massa", "landingpage.services.kalibrasi.kalibrasi-massa-service"],
      "kalibrasi-dimensi" => ["Kalibrasi Dimensi", "landingpage.services.kalibrasi.kalibrasi-dimensi-service"],
      "kalibrasi-volumetrik" => ["Kalibrasi Volumetrik", "landingpage.services.kalibrasi.kalibrasi-volumetrik-service"],
      "kalibrasi-kelembaban" => ["Kalibrasi Kelembaban & Kelembapan", "landingpage.services.kalibrasi.kalibrasi-kelembaban-service"],
      "kalibrasi-kelistrikan" => ["Kalibrasi Alat Ukur Listrik", "landingpage.services.kalibrasi.kalibrasi-kelistrikan-service"],
    ];

    $data = $slugs[$slug] ?? ['Deskripsi', 'landingpage.pages.article'];

    $title = $data[0] . " | PT. Sigma Mutu Indonesia";
    return view($data[1], compact('title'));
  }
}
