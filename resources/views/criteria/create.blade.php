@extends('layouts.private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6 mb-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Criteria</h6>
            </div>
            <div class="card-body">
                <main class="form-master">
                    <form action="/criteria" method="post">
                        @csrf
                        <div class="form mb-2">
                            <label for="code">Criteria Code</label>
                            <input type="text" name="code" class="form-control rounded-top  @error('code') is-invalid @enderror" id="code" placeholder="Criteria Code" required value="{{ old('code') }}">
                            @error('code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form">
                            <label for="name">Criteria Name</label>
                            <input type="text" name="name" class="form-control rounded-top  @error('name') is-invalid @enderror" id="name" placeholder="Criteria Name" required value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col text-right">
                            <a href="/criteria" class="w-30 btn btn-md btn-danger mt-3">Cancel</a>
                            <button class="w-30 btn btn-md btn-primary mt-3" type="submit">Save</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection