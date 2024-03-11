<?php

function verificaFibonacci($numero) {
    $a = 0;
    $b = 1;
    while ($b < $numero) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    if ($b == $numero) {
        return true;
    } else {
        return false;
    }
}

// Número a ser verificado
$numeroInformado = 13;

if (verificaFibonacci($numeroInformado)) {
    echo "O número $numeroInformado pertence à sequência de Fibonacci.";
} else {
    echo "O número $numeroInformado não pertence à sequência de Fibonacci.";
}

?>
