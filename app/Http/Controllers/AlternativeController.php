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

    public function edit($id)
    {
        $alternative = Alternative::where('id', $id)->first();
        return view('alternative.edit', [ "alternative" => $alternative ]);
    }

    public function update(Request $request, $id)
    {
        $alternative = Alternative::where('id', $id)->first();
        $alternative->update([
            'name'   => $request->name
        ]);

        return redirect()
            ->route('alternative.index')
            ->with('success','Alternative updated successfully');
    }

    public function delete($code)
    {
        $alternative = Alternative::where('id', $code)->first();
        return view('alternative.delete', [ "alternative" => $alternative ]);
    }

    public function destroy($code)
    {
        $alternative = Alternative::where('id', $code)->firstorfail()->delete();

        $page = 'alternative.index';
        $success = '';
        $err = '';
        if($alternative) {
            $success = 'Alternative deleted successfully';
        } else {
            $err = 'Alternative deleted failure';
        }

        return redirect()
            ->route($page)
            ->with('success', $success)
            ->with('err', $err);
    }
}
