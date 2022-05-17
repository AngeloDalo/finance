@extends('layouts.admin')

@section('content')
    <div class="container">
        <!-- TOTALE -->
        <h1>SALDO TOTALE:
        @php
            $saldo=0;
            foreach ($transactions as $transaction) {
                if($transaction->type_id == 2) {
                    $transaction->price *= -1;
                }
                $saldo = $saldo + $transaction->price;
                }
            echo $saldo . '€';
        @endphp
        </h1>
        <!-- CASA -->
        <h1>SALDO CASA:
        @php
            $saldo=0;
            foreach ($transactions_casa as $transaction) {
                if($transaction->type_id == 2) {
                    $transaction->price *= -1;
                }
                $saldo = $saldo + $transaction->price;
                }
            echo $saldo . '€';
        @endphp
        </h1>
        <!-- CAMPAGNA -->
        <h1>SALDO CAMPAGNA
        @php
            $saldo=0;
            foreach ($transactions_campagna as $transaction) {
                if($transaction->type_id == 2) {
                    $transaction->price *= -1;
                }
                $saldo = $saldo + $transaction->price;
                }
            echo $saldo . '€';
        @endphp
        </h1>
    </div>
@endsection
