<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\CriteriaComparison;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteriaComparisons = CriteriaComparison::with([
            'firstCriterias',
            'valueWeights',
            'secondCriterias'
        ])->get();

        // @dd($criteriaComparisons);
        $criterias = Criteria::all();

        $matrik = array();
        for($x=0; $x <= count($criterias)-2; $x++) {
            for($y=($x+1); $y <= count($criterias)-1; $y++) {
                $matrik[$x][$y] = $criteriaComparisons[$y]->valueWeights[0]->value;
                $matrik[$y][$x] = 1/$criteriaComparisons[$x]->valueWeights[0]->value;
            }
        }

        // for($i = 0; $i <= count($matrik); $i++) {
        //     $matrik[$x][$x] = 1;
        // }

        
        // for($i=0; $i <  count($matrik); $i++) {
        //     for($j=0; $j < count($matrik[$i]); $j++) {
        //         echo $matrik[$i][$j] ?? 1 . " ";
        //     }
        //     echo "\r\n";
        // }

        @dd($matrik);
        return view('calculate.index', [
            'title' => 'Calculate',
            'active' => 'calculate',
            'matrik' => $matrik
        ]);
    }

    public function criteriaComparisons()
    {
        return view('criteria-comparison.index', [
            'title' => 'Criteria Comparison',
            'active' => 'criteria-comparison'
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
