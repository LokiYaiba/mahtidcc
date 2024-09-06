<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }
    public function show()
    {
        return view('index');
    }
}

