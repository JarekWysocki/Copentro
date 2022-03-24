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
                            <p>Enter codes to delete separate comma</p>
                        <textarea id="delete" rows="20" class="form-control"></textarea>
                        </div>    
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary delete">
                                    Delete codes
                                </button>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection