@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- TOTALE -->
                <h1 class="text-primary">SALDO TOTALE 2021:
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
                <h3 class="text-success">ENTRATE:
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
                <h3 class="text-danger">USCITE:
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
                <h3 class="text-success">ENTRATE:
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
                <h3 class="text-danger">USCITE:
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
        <div class="row mt-5">
            <div class="col-2 me-5">
                <h2>ENTRATE CASA</h2>
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 1) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Amazon:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 2) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Gas:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 3) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Benzina:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 4) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Luce:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 5) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Amashop:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 6) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Auto:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 7) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Moto:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 8) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Pensione:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 9) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rata:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 10) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rata:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 11) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 12) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Attrezzatura Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 13) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Lavori Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 14) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rimborso Dialisi:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 15) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Bonifico Cantina:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_casa as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 16) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Altro:' . $uscite . '€';
                @endphp
            </div>
            <div class="col-12 col-md-2 me-5">
                <h2>ENTRATE CAMPAGNA</h2>
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 1) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Amazon:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 2) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Gas:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 3) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Benzina:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 4) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Luce:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 5) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Amashop:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 6) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Manutenzione Auto:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 7) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Manutenzione Moto:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 8) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Pensione:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 9) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Rata:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 10) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Rata:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 11) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Manutenzione Campagna:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 12) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Manutenzione Attrezzatura Campagna:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 13) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Lavori Campagna:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 14) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Rimborso Dialisi:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 15) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Bonifico Cantina:' . $entrate . '€';
                @endphp
                @php
                $entrate=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 1 && $transaction->section_id == 16) {
                        $entrate = $entrate + $transaction->price;
                    }
                }
                echo 'Altro:' . $entrate . '€';
                @endphp
            </div>
            <div class="col-12 col-md-2">
                <h2>USCITE CAMPAGNA</h2>
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 1) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Amazon:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 2) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Gas:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 3) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Benzina:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 4) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Luce:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 5) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Amashop:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 6) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Auto:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 7) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Moto:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 8) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Pensione:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 9) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rata:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 10) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rata:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 11) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 12) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Manutenzione Attrezzatura Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 13) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Lavori Campagna:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 14) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Rimborso Dialisi:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 15) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Bonifico Cantina:' . $uscite . '€';
                @endphp
                @php
                $uscite=0;
                foreach ($transactions_campagna as $transaction) {
                    if($transaction->type_id == 2 && $transaction->section_id == 16) {
                        $uscite = $uscite + $transaction->price;
                    }
                }
                echo 'Altro:' . $uscite . '€';
                @endphp
            </div>
        </div>
    </div>

@endsection
