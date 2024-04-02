<?php

function cenario1($PV, $i, $n){
    $CF = $i / (1 - (1 / ((1 + $i)**$n)));

    $PMT = $PV * $CF;

    $TaPC = $PMT *$n;

    return $TaPC;
}

function cenario2($PV, $i, $n, $VE){
    $CF = $i / (1 - (1 / ((1 + $i)**$n)));

    $PMT = $PV * $CF;

    $TaPC = $VE + ($PMT * $n);

    return $TaPC;
}

function cenario3($PV, $i, $n, $VE){
    $CF = $i / (1 - (1 / ((1 + $i)**$n)));

    $PMT = ($PV * $CF) / (1 + $CF);

    $TaPC = $VE + ($PMT * $n);

    return $TaPC;
}