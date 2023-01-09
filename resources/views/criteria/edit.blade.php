@extends('layouts.private')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6 mb-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Criteria</h6>
            </div>
            <div class="card-body">
                <main class="form-master">
                    <form action="{{ route('criteria.update', $criteria->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <!-- Equivalent to... -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" value="{{ $criteria->id }}" />
                        <div class="form">
                            <label for="name">Criteria Name</label>
                            <input type="text" name="name" class="form-control rounded-top  @error('name') is-invalid @enderror" id="name" placeholder="Criteria Name" required value="{{ old('name', $criteria->name) }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col text-right">
                            <a href="/criteria" class="w-30 btn btn-md btn-danger mt-3">Cancel</a>
                            <button class="w-30 btn btn-md btn-primary mt-3" type="submit">Update</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
