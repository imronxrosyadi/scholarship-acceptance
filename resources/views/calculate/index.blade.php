@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h1>Calculate</h1>
            </div>
        </div>
        @if(count($calculateCriteria)>0)
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Criteria Comparison</h6>
            </div>
         
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                                <th>Criteria</th>
                                @php
                                    for ($x = 0; $x <= count($criterias)-1; $x++) {
                                        echo "<th>".$criterias[$x]->name."</th>";
                                    }
                                @endphp
                            </tr>
                        </thead>
                        <tbody>
                        @for($x = 0; $x <= count($criterias)-1; $x++)
                            <tr>
                                <th>{{ $criterias[$x]->name }}</th>
                                @for ($y=0; $y <= count($criterias)-1; $y++)
                                <td>{{ round($calculateCriteria['matrik'][$x][$y],5); }}</td>
                                @endfor
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Jumlah</th>
                            @php
                                for ($x = 0; $x <= count($criterias)-1; $x++) {
                                    echo "<th>".round($calculateCriteria['jmlmpb'][$x],5)."</th>";
                                }
                            @endphp
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Matriks Nilai Kriteria</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                                <th>Criteria</th>
                                @php
                                    for ($x = 0; $x <= count($criterias)-1; $x++) {
                                        echo "<th>".$criterias[$x]->name."</th>";
                                    }
                                @endphp
                                <th>Jumlah</th>
				                <th>Priority Vector</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            for ($x=0; $x <= count($criterias)-1; $x++) {
                                echo "<tr>";
                                echo "<td>".$criterias[$x]->name."</td>";
                                    for ($y=0; $y <= count($criterias)-1; $y++) {
                                        echo "<td>".round($calculateCriteria['matrikb'][$x][$y],5)."</td>";
                                    }

                                echo "<td>".round($calculateCriteria['jmlmnk'][$x],5)."</td>";
                                echo "<td>".round($calculateCriteria['pv'][$x],5)."</td>";

                                echo "</tr>";
                            }
                            @endphp
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="<?php echo (count($criterias)+2)?>">Principe Eigen Vector (λ maks)</th>
                            <th><?php echo (round($calculateCriteria['eigenvektor'],5))?></th>
                        </tr>
                        <tr>
                            <th colspan="<?php echo (count($criterias)+2)?>">Consistency Index</th>
                            <th><?php echo (round($calculateCriteria['consIndex'],5))?></th>
                        </tr>
                        <tr>
                            <th colspan="<?php echo (count($criterias)+2)?>">Consistency Ratio</th>
                            <th><?php echo (round(($calculateCriteria['consRatio'] * 100),2))?> %</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @endif
        <!-- below is alternative comparison calculate -->

        @for($i = 0; $i <= count($calculateAlternatives)-1; $i++)
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alternative Comparison - {{ $criterias[$calculateAlternatives[$i]['criteriaId']]->name }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                                <th>Criteria</th>
                                @php
                                    for ($x = 0; $x <= count($alternatives)-1; $x++) {
                                        echo "<th>".$alternatives[$x]->name."</th>";
                                    }
                                @endphp
                            </tr>
                        </thead>
                        <tbody>
                        @for($x = 0; $x <= count($alternatives)-1; $x++)
                            <tr>
                                <th>{{ $alternatives[$x]->name }}</th>
                                @for ($y=0; $y <= count($alternatives)-1; $y++)
                                <td>{{ round($calculateAlternatives[$i]['matrik'][$x][$y],5); }}</td>
                                @endfor
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Jumlah</th>
                            @php
                                for ($x = 0; $x <= count($alternatives)-1; $x++) {
                                    echo "<th>".round($calculateAlternatives[$i]['jmlmpb'][$x],5)."</th>";
                                }
                            @endphp
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Matriks Nilai Kriteria</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                                <th>Criteria</th>
                                @php
                                    for ($x = 0; $x <= count($alternatives)-1; $x++) {
                                        echo "<th>".$alternatives[$x]->name."</th>";
                                    }
                                @endphp
                                <th>Jumlah</th>
				                <th>Priority Vector</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            for ($x=0; $x <= count($alternatives)-1; $x++) {
                                echo "<tr>";
                                echo "<td>".$alternatives[$x]->name."</td>";
                                    for ($y=0; $y <= count($alternatives)-1; $y++) {
                                        echo "<td>".round($calculateAlternatives[$i]['matrikb'][$x][$y],5)."</td>";
                                    }

                                echo "<td>".round($calculateAlternatives[$i]['jmlmnk'][$x],5)."</td>";
                                echo "<td>".round($calculateAlternatives[$i]['pv'][$x],5)."</td>";

                                echo "</tr>";
                            }
                            @endphp
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="<?php echo (count($alternatives)+2)?>">Principe Eigen Vector (λ maks)</th>
                            <th><?php echo (round($calculateAlternatives[$i]['eigenvektor'],5))?></th>
                        </tr>
                        <tr>
                            <th colspan="<?php echo (count($alternatives)+2)?>">Consistency Index</th>
                            <th><?php echo (round($calculateAlternatives[$i]['consIndex'],5))?></th>
                        </tr>
                        <tr>
                            <th colspan="<?php echo (count($alternatives)+2)?>">Consistency Ratio</th>
                            <th><?php echo (round(($calculateAlternatives[$i]['consRatio'] * 100),2))?> %</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @endfor

        <!--RESULT CALCULATION--> <!--TO DO-->
                        
        <!-- RANKING SECTION -->
        @if(count($rank) > 0)
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ranking</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                         <thead>
                            <tr>
                            <th class="font-weight-bold text-primary" >Peringkat</th>
				            <th class="font-weight-bold text-primary">Alternatif</th>
				            <th class="font-weight-bold text-primary">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        @for($x = 0; $x <= count($rank)-1; $x++)
                            <tr>
                            <td>{{$x}}</td>
                            <td>{{$rank[$x]->alternative_id}}</td>
                            <td>{{$rank[$x]->value}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
        <h6 class="m-0 font-weight-bold text-primary">Please Complete All Form Calculation</h6>
        @endIf

    </div>
</div>
@endsection