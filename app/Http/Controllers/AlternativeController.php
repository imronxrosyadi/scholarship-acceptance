<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    public function index()
    {
        return view('alternative.index', [
            'title' => 'Alternative',
            'active' => 'alternative',
            "alternatives" => Alternative::latest()->paginate(100)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('alternative.create', [
            'title' => 'Alternative',
            'active' => 'alternative'
        ]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Alternative::create($validatedData);

        return redirect('/alternative')->with('success', 'Created alternative success!');
    }

    public function edit(Request $request)
    {
        //
    }
}
