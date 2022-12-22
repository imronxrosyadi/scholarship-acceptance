<?php

namespace App\Http\Controllers;

use App\Models\ValueWeight;
use Illuminate\Http\Request;

class ValueWeightController extends Controller
{
    public function index()
    {
        return view('value-weight.index', [
            'title' => 'Value Weight',
            'active' => 'value-weight',
            "valueweights" => ValueWeight::latest()->paginate(100)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('value-weight.create', [
            'title' => 'Value Weight',
            'active' => 'value-weight'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'value' => 'required|numeric',
            'description' => 'required|max:255'
        ]);

        ValueWeight::create($validatedData);

        return redirect('/value-weight')->with('success', 'Created criteria success!');
    }

    public function edit(Request $request)
    {
        //
    }
}
