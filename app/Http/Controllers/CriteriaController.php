<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('criteria.index', [
            'title' => 'Criteria',
            'active' => 'criteria',
            "criterias" => Criteria::latest()->paginate(100)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criteria.create', [
            'title' => 'Criteria',
            'active' => 'criteria'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        Criteria::create($validatedData);

        return redirect('/criteria')
            ->with('success', 'Created criteria success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function show(Criteria $criteria)
    {
        //
    }

    public function edit($id)
    {
        $criteria = Criteria::where('id', $id)->first();
        return view('criteria.edit', [ "criteria" => $criteria ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $criteria = Criteria::where('id', $id)->first();
        $criteria->update([
            'name'   => $request->name
        ]);

        return redirect()
            ->route('criteria.index')
            ->with('success','Criteria updated successfully');
    }

    public function delete($code)
    {
        $criteria = Criteria::where('id', $code)->first();
        return view('criteria.delete', [ "criteria" => $criteria ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $criteria = Criteria::where('id', $code)->firstorfail()->delete();

        $page = 'criteria.index';
        $success = '';
        $err = '';
        if($criteria) {
            $success = 'Criteria deleted successfully';
        } else {
            $err = 'Criteria deleted failure';
        }

        return redirect()
            ->route($page)
            ->with('success', $success)
            ->with('err', $err);
    }


}
