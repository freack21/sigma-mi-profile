<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AlreadyLoggedIn
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next)
  {
    if (Session()->has('loginId') && url('admin/login') == $request->url()) {
      return redirect('admin/dashboard');
    }
    return $next($request);
  }
}
