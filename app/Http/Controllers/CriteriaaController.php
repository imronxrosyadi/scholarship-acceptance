<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaaController extends Controller
{
    public function index()
    {
        return view('criteria.index', [
            'title' => 'Criteria',
            'active' => 'criteria',
            "criterias" => Criteria::latest()->paginate(100)->withQueryString()
        ]);
    }

    public function add()
    {
        return view('criteria.add', [
            'title' => 'Criteria',
            'active' => 'criteria'
        ]);
    }

    public function list()
    {
        return view('criteria.list', [
            'title' => 'Criteria',
            'active' => 'criteria',
            "criterias" => Criteria::latest()->paginate(100)->withQueryString()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Criteria::create($validatedData);

        return redirect('/criteria')->with('success', 'Created criteria success!');
    }

    public function edit(Request $request)
    {
        //
    }
}
