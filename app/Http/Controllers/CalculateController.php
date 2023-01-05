<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\CriteriaComparison;
use App\Models\IndeksRandomConsistency;
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
        $urut = 0;
        $clength= count($criterias);
        for($x=0; $x <=  $clength-2; $x++) {
            for($y=($x+1); $y <=  $clength-1; $y++) {
                $matrik[$x][$y] = $criteriaComparisons[$urut]->valueWeights[0]->value;
                $matrik[$y][$x] = 1/$criteriaComparisons[$urut]->valueWeights[0]->value;
                $urut++;
            }
        }

        for($i = 0; $i <= count($matrik)-1; $i++) {
            $matrik[$i][$i] = 1;
        }

        for ($x=0; $x <= ($clength-1); $x++) { 
            for ($y=0; $y <= ( $clength-1); $y++) { 
                echo ($matrik[$x][$y])."-";
            }
        }

        //matrik sudah sesuai

        $jmlmpb = array();
	    $jmlmnk = array();
	for ($i=0; $i <= ( $clength-1); $i++) {
		$jmlmpb[$i] = 0;
		$jmlmnk[$i] = 0;
	}

    for ($x=0; $x <= ($clength-1) ; $x++) {
		for ($y=0; $y <= ($clength-1) ; $y++) {
			$value		= $matrik[$x][$y];
			$jmlmpb[$y] += $value;
		}
	}

    
    for ($x=0; $x <= ( $clength-1) ; $x++) {
		for ($y=0; $y <= ( $clength-1) ; $y++) {
			$matrikb[$x][$y] = $matrik[$x][$y] / $jmlmpb[$y];
			$value	= $matrikb[$x][$y];
			$jmlmnk[$x] += $value;
		}

		// nilai priority vektor
		$pv[$x]	 = $jmlmnk[$x] /  $clength;

		// memasukkan nilai priority vektor ke dalam tabel pv_kriteria dan pv_alternatif
		$id_kriteria = $this->getKriteriaID($x);
		$this->inputKriteriaPV($id_kriteria,$pv[$x]);

	}

    $eigenvektor = $this->getEigenVector($jmlmpb,$jmlmnk, $clength);
	$consIndex   = $this->getConsIndex($jmlmpb,$jmlmnk, $clength);
	$consRatio   = $this->getConsRatio($jmlmpb,$jmlmnk, $clength);


        return view('calculate.index', [
            'title' => 'Calculate',
            'active' => 'calculate',
            'matrik' => $matrik,
            'criterias' =>$criterias
        ]);
    }
    
    function getEigenVector($matrik_a,$matrik_b, $clength) {
        $eigenvektor = 0;
        for ($i=0; $i <= ( $clength-1) ; $i++) {
            $eigenvektor += ($matrik_a[$i] * (($matrik_b[$i]) /  $clength));
        }
    
        return $eigenvektor;
    }
    
    // mencari Cons Index
    function getConsIndex($matrik_a,$matrik_b, $clength) {
        $eigenvektor = $this->getEigenVector($matrik_a,$matrik_b, $clength);
        $consindex = ($eigenvektor -  $clength)/( $clength-1);
    
        return $consindex;
    }
    
    // Mencari Consistency Ratio
    function getConsRatio($matrik_a,$matrik_b, $clength) {
        $indeksRandomConsistency = IndeksRandomConsistency::select('value')->where('amount', $clength)->first();

        $consindex = $this->getConsIndex($matrik_a,$matrik_b, $clength);
        $consratio = $consindex / $indeksRandomConsistency;
        // ambil nilai IR konstanta di DB
        return $consratio;
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
