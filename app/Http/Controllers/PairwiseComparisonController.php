<?php

namespace App\Http\Controllers;

use App\Models\PairwiseComparison;
use App\Http\Requests\StorePairwiseComparisonRequest;
use App\Http\Requests\UpdatePairwiseComparisonRequest;

class PairwiseComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePairwiseComparisonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePairwiseComparisonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PairwiseComparison  $pairwiseComparison
     * @return \Illuminate\Http\Response
     */
    public function show(PairwiseComparison $pairwiseComparison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PairwiseComparison  $pairwiseComparison
     * @return \Illuminate\Http\Response
     */
    public function edit(PairwiseComparison $pairwiseComparison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePairwiseComparisonRequest  $request
     * @param  \App\Models\PairwiseComparison  $pairwiseComparison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePairwiseComparisonRequest $request, PairwiseComparison $pairwiseComparison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PairwiseComparison  $pairwiseComparison
     * @return \Illuminate\Http\Response
     */
    public function destroy(PairwiseComparison $pairwiseComparison)
    {
        //
    }
}
