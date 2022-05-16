@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center border border-danger rounded-3">
        <div class="col-md-8">
            <div class="card">
                <a href="{{ url('/transaction') }}" class="btn btn-outline-danger">View My Transaction</a>
            </div>
        </div>
    </div>
</div>
@endsection
