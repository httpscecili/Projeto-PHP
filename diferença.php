<?php

function lerValor($descricao) {
    echo "Digite o valor " . $descricao . ": ";
    $handle = fopen("php://stdin", "r");
    $valor = trim(fgets($handle));
    return (float)$valor;
}


$valor1 = lerValor(1);
$valor2 = lerValor(2);


$diferenca = abs($valor1 - $valor2);


echo "A diferença entre os dois valores é: " . $diferenca . "\n";
?>
