<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Coc;
use Illuminate\View\View;

class CocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Protect all methods with auth middleware
    }


    public function index(): View
    {
        if (auth()->user()->isAdmin) {
            // Admin view
            $coc = Coc::all();
            return view ('coc.index')->with('coc', $coc);
        } else {
            $coc = Coc::all();
            return view ('coc.index-normal')->with('coc', $coc);
        }
    }


    
    public function create(): View
    {
        return view('coc.create');
    }


    

    //////////////////////////////////////////////////////////////////


    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'renhour' => 'required|string|max:255',
            'rentype' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'sday' => 'required|string|max:255',
            'eday' => 'required|string|max:255',
            'gday' => 'required|string|max:255',
            'p1name' => 'required|string|max:255',
            'p1position' => 'required|string|max:255',
            'p1email' => 'required|string|max:255',
            'p2name' => 'required|string|max:255',
            'p2position' => 'required|string|max:255',
            'p2email' => 'required|string|max:255',
        ]);

        // Create a new coc record
        $coc = new Coc();
        $coc->fname = $request->input('fname');
        $coc->mname = $request->input('mname');
        $coc->lname = $request->input('lname');
        $coc->renhour = $request->input('renhour');
        $coc->rentype = $request->input('rentype');
        $coc->position = $request->input('position');
        $coc->course = $request->input('course');
        $coc->sday = $request->input('sday');
        $coc->eday = $request->input('eday');
        $coc->gday = $request->input('gday');
        $coc->p1name = $request->input('p1name');
        $coc->p1position = $request->input('p1position');
        $coc->p1email = $request->input('p1email');
        $coc->p2name = $request->input('p2name');
        $coc->p2position = $request->input('p2position');
        $coc->p2email = $request->input('p2email');

        $coc->Uname = auth()->user()->name;
        // Save the coc record
        try {
            $coc->save();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error: ' . $e->getMessage());
        }

        return redirect('coc')->with('flash_message', 'Coc Added!');
    }

    
    ////////////////////////////////////////////////////////////////////////////

    public function show(string $id): View
    {
        $coc = Coc::find($id);
        return view('coc.show')->with('coc', $coc);
    }



    public function edit(string $id): View
    {
        $coc = Coc::find($id);
        return view('coc.edit')->with('coc', $coc);
    }




    

    public function update(Request $request, string $id): RedirectResponse
        {
            // Find the existing coe record
            $coc = Coc::find($id);

            // Check if the record exists
            if (!$coc) {
                return redirect()->back()->withErrors('Error: COE record not found.');
            }

            // Validate the incoming request data
            $request->validate([
                'fname' => 'required|string|max:255',
                'mname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'renhour' => 'required|string|max:255',
                'rentype' => 'required|string|max:255',
                'position' => 'required|string|max:255',
                'course' => 'required|string|max:255',
                'sday' => 'required|string|max:255',
                'eday' => 'required|string|max:255',
                'gday' => 'required|string|max:255',
                'p1name' => 'required|string|max:255',
                'p1position' => 'required|string|max:255',
                'p1email' => 'required|string|max:255',
                'p2name' => 'required|string|max:255',
                'p2position' => 'required|string|max:255',
                'p2email' => 'required|string|max:255',
            ]);

            // Update the COE record with new values
            $coc->fname = $request->input('fname');
            $coc->mname = $request->input('mname');
            $coc->lname = $request->input('lname');
            $coc->renhour = $request->input('renhour');
            $coc->rentype = $request->input('rentype');
            $coc->position = $request->input('position');
            $coc->course = $request->input('course');
            $coc->sday = $request->input('sday');
            $coc->eday = $request->input('eday');
            $coc->gday = $request->input('gday');

            $coc->p1name = $request->input('p1name');
            $coc->p1position = $request->input('p1position');
            $coc->p1email = $request->input('p1email');

            $coc->p2name = $request->input('p2name');
            $coc->p2position = $request->input('p2position');
            $coc->p2email = $request->input('p2email');

            // Save the updated COE record
            try {
                $coc->save();
            } catch (\Exception $e) {
                return redirect()->back()->withErrors('Error: ' . $e->getMessage());
            }

            return redirect('coc')->with('flash_message', 'COE Updated!');
        }








    public function destroy(string $id): RedirectResponse
    {
        Coc::destroy($id);
        return redirect('coc')->with('flash_message', 'coc deleted!'); 
    }

}
