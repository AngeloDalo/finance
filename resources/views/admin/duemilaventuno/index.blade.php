@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- TOTALE -->
                <h1>SALDO TOTALE 2021:
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
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-5">
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
                <h3>ENTRATE:
                    @php
                    $entrate=0;
                    foreach ($transactions_casa as $transaction) {
                        if($transaction->type_id == 1) {
                            $entrate = $entrate + $transaction->price;
                        }
                    }
                    echo $entrate . '€';
                    @endphp
                </h3>
                <h3>USCITE:
                    @php
                    $uscite=0;
                    foreach ($transactions_casa as $transaction) {
                        if($transaction->type_id == 2) {
                            $uscite = $uscite + $transaction->price;
                        }
                    }
                    echo $uscite . '€';
                    @endphp
                </h3>
            </div>
            <div class="col-5">
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
                <h3>ENTRATE:
                    @php
                    $entrate=0;
                    foreach ($transactions_campagna as $transaction) {
                        if($transaction->type_id == 1) {
                            $entrate = $entrate + $transaction->price;
                        }
                    }
                    echo $entrate . '€';
                    @endphp
                </h3>
                <h3>USCITE:
                    @php
                    $uscite=0;
                    foreach ($transactions_campagna as $transaction) {
                        if($transaction->type_id == 2) {
                            $uscite = $uscite + $transaction->price;
                        }
                    }
                    echo $uscite . '€';
                    @endphp
                </h3>
            </div>
        </div>
    </div>

@endsection
