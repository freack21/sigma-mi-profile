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

  public function description()
  {
    $title = "Deskripsi | PT. Sigma Mutu Indonesia";
    return view('landingpage.pages.article', compact('title'));
  }
}
