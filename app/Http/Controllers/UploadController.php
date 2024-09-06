<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function uploadExcel(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        // Load the Excel file and convert it to an array
        $file = $request->file('file');
        $data = Excel::toArray(new \stdClass, $file);

        // Pass the data to the view
        return view('upload.excel', ['data' => $data]);
    }
}
