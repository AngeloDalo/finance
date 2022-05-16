@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row row-title-index">
            <h1 class="fw-bold">I MIEI MOVIMENTI</h1>
        </div>
        <!--message delate-->
        <div class="row">
            <div class="col">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table border border-success text-center">
                    <thead>
                        <tr class="table-success">
                            <th>NOME</th>
                            <th>CATEGORIA</th>
                            <th>COSTO</th>
                            <th>TIPO</th>
                            <th>DATA</th>
                            <th>GRUPPO</th>
                            <th>VEDI</th>
                            <th>MODIFICA</th>
                            {{-- <th>ELIMINA</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->name }}</td>
                                <td>{{ $transaction->section_id}}</td>
                                <td>{{ $transaction->price }}&euro;</td>
                                <td>{{ $transaction->type_id }}</td>
                                <td>{{ $transaction->date }}</td>
                                <td>{{ $transaction->group_id}}</td>
                                <td><a class="btn btn-success text-white"
                                        href="{{ route('transactions.show', $transaction->id) }}">VEDI</a></td>
                                <td>
                                    <a class="btn btn-success text-white"
                                        href="{{ route('transactions.edit', $transaction->id) }}">MODIFICA</a>
                                </td>
                                {{-- <td>
                                    <form action="{{ route('transctions.destroy', $transaction->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="ELIMINA">
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

