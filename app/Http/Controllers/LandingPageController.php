<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
  public function home()
  {
    $title = "Beranda | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.home', compact('title'));
  }

  public function article()
  {
    $title = "Artikel | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.article', compact('title'));
  }

  public function service($slug)
  {
    $slugs = [
      "sertifikasi-22000-2015" => ["Sertifikasi ISO 22000:2015", "landingpage.services.sertifikasi.22000-2015-service"],
      "sertifikasi-9001-2015" => ["Sertifikasi ISO 9001:2015", "landingpage.services.sertifikasi.9001-2015-service"],
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
