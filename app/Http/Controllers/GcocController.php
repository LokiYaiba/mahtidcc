<?php

namespace App\Http\Controllers;
use App\Models\Coc;
use Illuminate\Http\Request;

class GcocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }

    public function show($id)
    {
        $coc = Coc::findOrFail($id);
        return view('Cocd.gcoc', [
            'coc' => $coc,
        ]);
        
    }

}
