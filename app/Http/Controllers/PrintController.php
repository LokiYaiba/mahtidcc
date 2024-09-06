<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;

class PrintController extends Controller
{
    public function downloadPdf($id)
    {
        // Fetch the student data from the database using the provided ID
        $student = Student::findOrFail($id);

        // Load the view and pass the student data
        $pdf = Pdf::loadView('ID\id_card', ['students' => $student]);

        // Stream the PDF to the browser
        return $pdf->download('id-card.pdf');
    }
}

