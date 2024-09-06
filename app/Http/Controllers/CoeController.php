<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Coe;
use Illuminate\View\View;


class CoeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }
    
    public function index(): View
    {
        if (auth()->user()->isAdmin) {
            // Admin view
            $coe = Coe::all();
            return view ('coe.index')->with('coe', $coe);
        } else {
            $coe = Coe::all();
            return view ('coe.index-normal')->with('coe', $coe);
        }
    }
    
    public function create(): View
    {
        return view('coe.create');
    }


    
    public function store(Request $request): RedirectResponse
    {
    // Validate the incoming request data
    $request->validate([
        'fname' => 'required|string|max:255',
        'mname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'jtype' => 'required|string|max:255',
        'dept' => 'required|string|max:255',
        'sday' => 'required|string|max:255',
        'eday' => 'required|string|max:255',
        'gday' => 'required|string|max:255',
        
        
    ]);

    // Create a new coe record
    $coe = new coe();
    $coe->fname = $request->input('fname');
    $coe->mname = $request->input('mname');
    $coe->lname = $request->input('lname');
    $coe->position = $request->input('position');
    $coe->jtype = $request->input('jtype');
    $coe->dept = $request->input('dept');
    $coe->sday = $request->input('sday');
    $coe->eday = $request->input('eday');
    $coe->gday = $request->input('gday');
    

    $coe->Uname = auth()->user()->name;
    // Save the coe record
    try {
        $coe->save();
    } catch (\Exception $e) {
        dd('Error: ' . $e->getMessage()); // Show error message
    }

    return redirect('coe')->with('flash_message', 'coe Added!');
    }


    public function show(string $id): View
    {
        $coe = Coe::find($id);
        return view('coe.show')->with('coe', $coe);
    }



    public function edit(string $id): View
    {
        $coe = Coe::find($id);
        return view('coe.edit')->with('coe', $coe);
    }




    public function update(Request $request, string $id): RedirectResponse
    {
        // Find the existing coe record
        $coe = Coe::find($id);

        // Validate the incoming request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'jtype' => 'required|string|max:255',
            'dept' => 'required|string|max:255',
            'sday' => 'required|string|max:255',
            'eday' => 'required|string|max:255',
            'gday' => 'required|string|max:255',
        ]);

        $coe->fname = $request->input('fname');
        $coe->mname = $request->input('mname');
        $coe->lname = $request->input('lname');
        $coe->position = $request->input('position');
        $coe->jtype = $request->input('jtype');
        $coe->dept = $request->input('dept');
        $coe->sday = $request->input('sday');
        $coe->eday = $request->input('eday');
        $coe->gday = $request->input('gday');

        
        // Save the updated coe record
        try {
            $coe->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }

        return redirect('coe')->with('flash_message', 'coe Updated!');
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Coe::destroy($id);
        return redirect('coe')->with('flash_message', 'coe deleted!'); 
    }
}