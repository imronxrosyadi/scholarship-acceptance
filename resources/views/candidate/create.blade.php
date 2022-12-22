@extends('layouts/private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6 mb-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Candidate</h6>
            </div>
            <div class="card-body">
                <main class="form-master">
                    <form action="/candidate" method="post">
                        @csrf
                        <div class="form">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control rounded-top  @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col text-right">
                            <a href="/candidate" class="w-30 btn btn-md btn-danger mt-3">Cancel</a>
                            <button class="w-30 btn btn-md btn-primary mt-3" type="submit">Save</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection