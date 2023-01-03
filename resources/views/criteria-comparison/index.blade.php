@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h1>Criteria Comparison</h1>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Criteria Comparison</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead class="bg-gradient-primary text-light">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>First Criteria</th>
                            <th>Value Weight</th>
                            <th>Second Criteria</th>
                        </tr>
                    </thead>
                    
                    <form action="{{ route('criteria-comparison.store') }}" method="POST">
                        @csrf
                    <tbody>
                        @if (count($criteriaComparisons) > 0)
                            @foreach($criteriaComparisons as $criteriaComparison)
                            <tr>
                                <input type="text" name="type" value="update" hidden>
                                <input type="text" name="id[]" value="{{ $criteriaComparison->id }}" hidden>
                                <td><input type="text" name="firstCriteria[]" value="{{ $criteriaComparison->firstCriterias[0]->id }}" hidden>{{ $criteriaComparison->firstCriterias[0]->name }}</td>
                                <td>
                                    <select class="form-select" name="valueWeight[]">
                                        <option value="{{ $criteriaComparison->valueWeights[0]->id }}" selected>{{ ('(' . ($criteriaComparison->valueWeights[0]->value) . ') ' . ($criteriaComparison->valueWeights[0]->description)) ?? 'Select value weight'  }}</option>
                                        @foreach($valueWeights as $valueWeight)
                                        @if (($criteriaComparison->valueWeights[0]->id ?? 9999) != $valueWeight->id)
                                        <option value="{{ $valueWeight->id }}">{{ '(' . ($valueWeight->value) . ') ' . ($valueWeight->description) }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="text" name="secondCriteria[]" value="{{ $criteriaComparison->secondCriterias[0]->id }}" hidden>{{ $criteriaComparison->secondCriterias[0]->name }}</td>
                            </tr>
                            @endforeach
                        @else
                            @for ($x = 0; $x <= (count($criterias)-2); $x++)
                                @for ($y = ($x+1); $y <= (count($criterias)-1); $y++)
                                    <tr>
                                        <input type="text" name="type" value="create" hidden>
                                        <td><input type="text" name="firstCriteria[]" value="{{ $criterias[$x]->id }}" hidden>{{ $criterias[$x]->name }}</td>
                                        <td>
                                        <select class="form-select" name="valueWeight[]">
                                            <option selected>Select value weight</option>
                                            @foreach($valueWeights as $valueWeight)
                                                <option value="{{ $valueWeight->id }}">{{ '(' . ($valueWeight->value) . ') ' . ($valueWeight->description) }}</option>
                                            @endforeach
                                        </select>
                                        </td>
                                        <td><input type="text" name="secondCriteria[]" value="{{ $criterias[$y]->id }}" hidden>{{ $criterias[$y]->name }}</td>
                                    </tr>
                                    
                                @endfor
                            @endfor
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="text-center">
                    <button class="btn btn-primary btn">
                        <span class="text">Submit</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection