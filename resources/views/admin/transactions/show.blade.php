@extends('layouts.admin')

@section('content')
    <div class="container show ps-5 pb-5">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>


        <div class="row border border-success rounded-3 p-3">
            <div class="col-sm- 12 col-md-12 col-lg-6">
                <div class="d-flex flex-column">
                    <h3 class="card-title text-success">{{ $transaction->name }}</h3>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Nome: </span> {{ $transaction->name }}</span>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Categoria: </span> {{ $section }}</span>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Prezzo: </span> {{ $transaction->price }}&euro;</span>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Tipo: </span> {{ $type }}</span>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Gruppo: </span>{{ $group }}</span>
                    <span class="mb-2"><span class="fw-bold text-uppercase">Data: </span>{{ $transaction->date }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
