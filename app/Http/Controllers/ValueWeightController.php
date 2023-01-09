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

        return redirect('/value-weight')->with('success', 'Created value weight success!');
    }

    public function edit($id)
    {
        $valueweight = ValueWeight::where('id', $id)->first();
        return view('value-weight.edit', [ "valueweight" => $valueweight ]);
    }

    public function update(Request $request, $id)
    {
        $valueweight = ValueWeight::where('id', $id)->first();
        $valueweight->update([
            'value'   => $request->value,
            'description' => $request->description
        ]);

        return redirect()
            ->route('value-weight.index')
            ->with('success','Value Weight updated successfully');
    }

    public function delete($code)
    {
        $valueWeight = ValueWeight::where('id', $code)->first();
        return view('value-weight.delete', [ "valueWeight" => $valueWeight ]);
    }

    public function destroy($code)
    {
        $valueWeight = ValueWeight::where('id', $code)->firstorfail()->delete();

        $page = 'value-weight.index';
        $success = '';
        $err = '';
        if($valueWeight) {
            $success = 'Value Weight deleted successfully';
        } else {
            $err = 'Value Weight deleted failure';
        }

        return redirect()
            ->route($page)
            ->with('success', $success)
            ->with('err', $err);
    }
}
