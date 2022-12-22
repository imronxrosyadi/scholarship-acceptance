<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        return view('candidate.index', [
            'title' => 'Candidate',
            'active' => 'candidate',
            "candidates" => Candidate::latest()->paginate(100)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('candidate.create', [
            'title' => 'Candidate',
            'active' => 'candidate'
        ]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Candidate::create($validatedData);

        return redirect('/candidate')->with('success', 'Created candidate success!');
    }

    public function edit(Request $request)
    {
        //
    }
}
