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
                    <table class="table table-striped">
                        <tr>
                            <td>Id</td>
                            <td>Code</td>
                            <td>Created</td>
                            <td>User email</td>
                        </tr>
                    @forelse ($codes as $code)
                        <tr>
                            <td>{{ $code->id }}</td>
                            <td>{{ $code->value }}</td>
                            <td>{{ $code->created_at }}</td>
                            <td>{{ $code->user->email }}</td>
                        </tr>
                        @empty
                        <p> No codes found</p>
                    @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection