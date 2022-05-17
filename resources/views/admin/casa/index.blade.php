@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row row-title-index">
            <h1 class="fw-bold">I MIEI MOVIMENTI</h1>
            <h1>SALDO TOTALE:
                @php
                    $saldo=0;
                    foreach ($transactions_pay as $transaction) {
                        if($transaction->type_id == 2) {
                            $transaction->price *= -1;
                        }
                        $saldo = $saldo + $transaction->price;
                    }
                    echo $saldo . '€';
                @endphp
            </h1>
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
                            <th>ELIMINA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->name }}</td>
                                <td>
                                    @switch($transaction->section_id)
                                    @case(1)
                                        Amazon
                                        @break
                                    @case(2)
                                        Gas
                                        @break
                                    @case(3)
                                        Benzina
                                        @break
                                    @case(4)
                                        Luce
                                        @break
                                    @case(5)
                                        Amashop
                                        @break
                                    @case(6)
                                        Manutenzione Auto
                                        @break
                                    @case(7)
                                        Pensione
                                        @break
                                    @case(8)
                                        Mutup
                                        @break
                                    @case(9)
                                        Rata
                                        @break
                                    @case(10)
                                        Manutenzione Campagna
                                        @break
                                    @case(11)
                                        Manutenzione Attrezzature Campagna
                                        @break
                                    @case(12)
                                        Lavori Campagna
                                        @break
                                    @default
                                        Altro
                                @endswitch
                                </td>
                                @if ($transaction->type_id == 1)
                                    <td class="text-success">{{ $transaction->price }}&euro;</td>
                                @else
                                    <td class="text-danger">{{ $transaction->price }}&euro;</td>
                                @endif
                                <td>
                                    @switch($transaction->type_id)
                                    @case(1)
                                        Entrata
                                        @break

                                    @case(2)
                                        Uscita
                                        @break

                                    @default
                                        Altro
                                    @endswitch
                                </td>
                                <td>{{ $transaction->date }}</td>
                                <td>
                                    @switch($transaction->group_id)
                                    @case(1)
                                        Casa
                                        @break

                                    @case(2)
                                        Campagna
                                        @break

                                    @default
                                        Altro
                                    @endswitch
                                </td>
                                <td><a class="btn btn-success text-white"
                                        href="{{ route('transactions.show', $transaction->id) }}">VEDI</a></td>
                                <td>
                                    <a class="btn btn-success text-white"
                                        href="{{ route('transactions.edit', $transaction->id) }}">MODIFICA</a>
                                </td>
                                <td>
                                    <form action="{{ route('transactions.destroy', $transaction) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger" type="submit" value="ELIMINA">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>
@endsection

