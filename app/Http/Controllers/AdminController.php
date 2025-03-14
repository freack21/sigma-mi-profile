<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  public function login()
  {
    $title = "Login | Admin Sigma-MI";
    return view('admin.login', compact('title'));
  }

  public function doLogin(Request $request)
  {
    $user = User::where('email', '=', $request->email)->first();
    if ($user) {
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('loginId', $user->id);
        return redirect('admin/dashboard');
      }
    }
    return back()->with('fail', 'Email atau kata sandi salah');
  }

  public function home()
  {
    return redirect('admin/dashboard');
  }

  public function dashboard()
  {
    $data = array();
    if (Session::has('loginId')) {
      $data = User::where('id', '=', Session::get('loginId'))->first();
    }
    return view('admin.dashboard', compact('data'));
  }

  public function logout()
  {
    $data = array();
    if (Session::has('loginId')) {
      Session::pull('loginId');
      return redirect('admin/login');
    }
  }
}
