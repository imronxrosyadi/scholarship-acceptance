@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
            </div>
            <div class="card-body">
                <p>Hello {{ auth()->user()->name }}, welcome to scholarship acceptance app</p>
            </div>
        </div>
    </div>
</div>
@endsection
