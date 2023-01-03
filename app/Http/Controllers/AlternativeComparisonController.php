<?php

namespace App\Http\Controllers;

use App\Models\AlternativeComparison;
use App\Models\ValueWeight;
use App\Models\Criteria;
use App\Http\Requests\StoreAlternativeComparisonRequest;
use App\Http\Requests\UpdateAlternativeComparisonRequest;
use App\Models\Alternative;

class AlternativeComparisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alternativeComparisons = AlternativeComparison::with([
            'firstAlternatives',
            'secondAlternatives',
            'criterias',
            'valueWeights'
        ])->get();

        

        $valueWeights = ValueWeight::all();

        $criterias = Criteria::all();

        $alternatives = Alternative::all();

        return view('alternative-comparison.index', [
            'title' => 'Alternative Comparison',
            'active' => 'alternative-comparison',
            'alternativeComparisons' => $alternativeComparisons,
            'valueWeights' => $valueWeights,
            'criterias' => $criterias,
            'alternatives' => $alternatives
        ]);
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
     * @param  \App\Http\Requests\StoreAlternativeComparisonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlternativeComparisonRequest $request)
    {
        // @dd($request);
        if ($request->type == 'create') {
            $size = count($request->firstAlternatives);
            for($i = 0; $i < $size; $i++) {
                $alternativeComparison = new AlternativeComparison();
                $alternativeComparison->first_alternative_id = $request->firstAlternatives[$i];
                $alternativeComparison->value_weight_id = $request->valueWeights[$i];
                $alternativeComparison->second_alternative_id = $request->secondAlternatives[$i];
                $alternativeComparison->criteria_id = $request->criteria;
                $alternativeComparison->save();
            }
        } else {
            // @dd($request);
            $size = count($request->firstAlternatives);
            for($i = 0; $i < $size; $i++) {
                // @dump($request->id);
                $alternativeComparison = AlternativeComparison::where('id', $request->id[$i])->first();
                // @dump($alternativeComparison);
                // @dd($request->firstCriteria[$i]);
                $alternativeComparison->first_alternative_id = $request->firstAlternatives[$i];
                $alternativeComparison->value_weight_id = $request->valueWeights[$i];
                $alternativeComparison->second_alternative_id = $request->secondAlternatives[$i];
                $alternativeComparison->criteria_id = $request->criteria;
                // @dump($alternativeComparison);
                $alternativeComparison->update();
                // @dump($criteriaComparison);
            }
        }

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlternativeComparison  $alternativeComparison
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alternativeComparisons = AlternativeComparison::with([
            'firstAlternatives',
            'secondAlternatives',
            'criterias',
            'valueWeights'
        ])->where('criteria_id', $id)->get();

        // @dd($alternativeComparison);

        $alternatives = Alternative::all();
        $valueWeights = ValueWeight::all();
        $criterias = Criteria::all();
        $selectedCriteria = Criteria::where('id', $id)->first();

        return view('alternative-comparison.detail', [
            'title' => 'Alternative Comparison',
            'active' => 'alternative-comparison',
            'alternativeComparisons' => $alternativeComparisons,
            'valueWeights' => $valueWeights,
            'criterias' => $criterias,
            'alternatives' => $alternatives,
            'selectedCriteria' => $selectedCriteria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlternativeComparison  $alternativeComparison
     * @return \Illuminate\Http\Response
     */
    public function edit(AlternativeComparison $alternativeComparison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlternativeComparisonRequest  $request
     * @param  \App\Models\AlternativeComparison  $alternativeComparison
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlternativeComparisonRequest $request, AlternativeComparison $alternativeComparison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlternativeComparison  $alternativeComparison
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlternativeComparison $alternativeComparison)
    {
        //
    }
}
