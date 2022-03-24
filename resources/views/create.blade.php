@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-md-6 mb-2">
                            <input id="codes" type="number" class="form-control" name="{{ Auth::user()->id }}" min="1" max="10" placeholder="How many codes you want to generate? (1-10)">
                        </div>    
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary codes">
                                    Generate codes
                                </button>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection