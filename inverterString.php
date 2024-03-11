<?php

function inverterString($string) {
    $tamanho = strlen($string);
    $stringInvertida = '';

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $stringInvertida .= $string[$i];
    }

    return $stringInvertida;
}


$stringOriginal = "Hello, world!";
$stringInvertida = inverterString($stringOriginal);
echo "String original: $stringOriginal <br>";
echo "String invertida: $stringInvertida";

?>
