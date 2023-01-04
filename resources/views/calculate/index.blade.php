@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h1>Calculate</h1>
            </div>
        </div>
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Criteria Comparison</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                        <thead class="bg-gradient-primary">
                        @for($x = 0; $x <= count($matrik); $x++)
                                
                            <tr class="text-white">
                            
                                <td>{{ $matrik[$x][$x]; }}</td>
                            </tr>
                        </thead>
                        <tbody>
                        @for($y = ($x+1); $y <= count($matrik)-1; $y++)
                            <tr class="table-row">
                                <td>{{ $matrik[$y][$x]; }}</td>
                            </tr>
                            @endfor
                            
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <!-- <div class="text-center">
                        <button class="btn btn-primary btn">
                            <span class="text">Submit</span>
                        </button>
                    </div> -->
            </div>
        </div>

    </div>
</div>
@endsection