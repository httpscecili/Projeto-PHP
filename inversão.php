<?php

function lerValor($descricao) {
    echo "Digite o valor da variável " . $descricao . ": ";
    $handle = fopen("php://stdin", "r");
    $valor = trim(fgets($handle));
    return (int)$valor;
}


$valorA = lerValor('A');
$valorB = lerValor('B');


echo "Valores antes da troca:\n";
echo "Variável A: " . $valorA . "\n";
echo "Variável B: " . $valorB . "\n";


$temp = $valorA;
$valorA = $valorB;
$valorB = $temp;


echo "Valores após a troca:\n";
echo "Variável A: " . $valorA . "\n";
echo "Variável B: " . $valorB . "\n";

