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
                         <thead>
                         <tr>
                         @for($x = 0; $x <= count($matrik)-1; $x++)
                         
                            <th>{{ $criterias[$x]->name }}<th>
                           
                         @endfor
                         </tr>
                        @for($x = 0; $x <= count($matrik)-1; $x++)
                      
                        </thead>
                        <tbody>
                        @for($y = 0; $y <= count($matrik)-1; $y++)
                            <tr class="table-row">
                                <td>{{ $matrik[$x][$y]; }}</td>
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