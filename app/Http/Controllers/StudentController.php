<?php
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Document;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }
    public function index(): View
    {
        if (auth()->user()->isAdmin) {
            // Admin view
            $students = Student::where('is_archived', false)->get();
            return view('students.index')->with('students', $students);
        } else {
            // Non-admin view
            $students = Student::where('is_archived', false)->get();
            return view('students.index-normal')->with('students', $students);
        }
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $request->validate([
            'employeeid' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'pic' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'sig' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'docname.*' => 'required|string|max:255',
            'docfile.*' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Check if the employeeid already exists
        if (Student::where('employeeid', $request->input('employeeid'))->exists()) {
            return back()->with('flash_message', 'Employee ID already exists.')->withInput();
        }

        // Create a new student record
        $student = new Student();
        $student->fill($request->except(['pic', 'sig']));
        
        // Store the images and get their paths
        if ($request->hasFile('pic')) {
            $student->pic = $request->file('pic')->store('public/pics');
        }
        if ($request->hasFile('sig')) {
            $student->sig = $request->file('sig')->store('public/signatures');
        }

        $student->Uname = auth()->user()->name; // Use the authenticated user's name


        // Save the student record
        try {
            $student->save();
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Error: ' . $e->getMessage()]);
        }

        // Handle multiple documents
        if ($request->hasFile('docfile') && $request->has('docname')) {
            $docfiles = $request->file('docfile'); // Array of files
            $docnames = $request->input('docname'); // Array of names

            // Ensure the number of files and names are the same
            if (count($docfiles) !== count($docnames)) {
                return back()->withErrors(['msg' => 'Mismatch between number of documents and names.']);
            }

            foreach ($docfiles as $index => $file) {
                $document = new Document(); // Create a new Document instance
                $document->student_id = $student->id; // Associate document with the student
                $document->docfile = $file->store('public/documents'); // Store file and get path
                $document->docname = $docnames[$index];
                $document->save();
            }
        }
        
            return redirect()->route('students.index')->with('flash_message', 'Employee Added!');
        
        
    }

    public function show(string $id): View
    {
        $student = Student::with('documents')->findOrFail($id);
        return view('students.show', ['students' => $student]);
    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'pic' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'sig' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'docname.*' => 'nullable|string|max:255',
            'docfile.*' => 'nullable|file|mimes:pdf,png,jpg,jpeg|max:2048',
        ]);
    
        // Update the student data except for 'pic' and 'sig'
        $student->fill($request->except(['pic', 'sig', 'docname', 'docfile']));
    
        // Check if a new image file is uploaded for 'pic' and update it
        if ($request->hasFile('pic')) {
            $student->pic = $request->file('pic')->store('public/pics');
        }
    
        // Check if a new signature file is uploaded for 'sig' and update it
        if ($request->hasFile('sig')) {
            $student->sig = $request->file('sig')->store('public/signatures');
        }
    
        // Save the updated student record
        try {
            $student->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }
    
        // Handle document updates or additions
        if ($request->has('docname')) {
            foreach ($request->input('docname') as $index => $docname) {
                if ($docname) {
                    $docfile = $request->file('docfile')[$index] ?? null;
    
                    if ($docfile) {
                        $docfilePath = $docfile->store('public/documents');
                    } else {
                        // Use the existing file if no new file is uploaded
                        $docfilePath = $student->documents[$index]->docfile ?? null;
                    }
    
                    if (isset($student->documents[$index])) {
                        // Update the existing document
                        $student->documents[$index]->update([
                            'docname' => $docname,
                            'docfile' => $docfilePath,
                        ]);
                    } else {
                        // Create a new document if it doesn't exist
                        $student->documents()->create([
                            'docname' => $docname,
                            'docfile' => $docfilePath,
                        ]);
                    }
                }
            }
        }
    
        return redirect('students')->with('flash_message', 'Student Updated!');
    }
    


    public function archive(string $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->is_archived = true;
        $student->save();

        return redirect('/students')->with('flash_message', 'Student archived successfully!');
    }

 

    public function showArchiveForm()
    {
        return view('students.archive-form');
    }
    
    public function checkArchivePassword(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);
    
        // Check the password
        if ($request->input('password') === '1') {
            $request->session()->put('archiveAccess', true);
            return redirect()->route('students.archiveList');
        }
        
        $request->session()->forget('archive-access');
        return redirect()->route('students.archiveForm')->with('error', 'Incorrect password');
    }
    

    public function archiveList(): View
    {
        // Fetch archived students
        $students = Student::where('is_archived', true)->get();
        
        // Return the view with the archived students
        return view('students.archive')->with('students', $students);
    }



    public function unarchive(string $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->is_archived = false;
        $student->save();

        return redirect('/students')->with('flash_message', 'Student restored successfully!');
    }


}


