<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coe;
class GcoeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }
    public function show($id)
    {
        $coe = Coe::findOrFail($id);
        return view('Coed.gcoe', [
            'coe' => $coe,
        ]);
        
    }
}