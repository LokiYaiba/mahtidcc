<?php
namespace App\Http\Controllers;
use App\Models\IdCreate;

class IdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }
    public function show($id)
    {
        $students = IdCreate::findOrFail($id);
        return view('ID.id_card', [
            'students' => $students,
        ]);
        
    }
}
