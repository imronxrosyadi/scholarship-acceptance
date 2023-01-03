@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="row mb-3">
            <div class="col-lg-6">
                <h1>Alternative Comparison</h1>
            </div>
        </div>
        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alternative Comparison - Criterias</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                        <thead class="bg-gradient-primary">
                            <tr class="text-white">
                                <th>Criteria Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($criterias as $criteria)
                            <tr class="table-row" data-href="/calculate/alternative-comparison/{{ $criteria->id }}">
                                <td>{{ $criteria->name }}</td>
                            </tr>
                            @endforeach
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