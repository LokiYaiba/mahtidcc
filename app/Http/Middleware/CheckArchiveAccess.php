<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckArchiveAccess
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('archiveAccess', false)) {
            return $next($request);
        }
        return redirect()->route('students.archiveForm')->with('error', 'You need to enter the password to access this page');
    }
}