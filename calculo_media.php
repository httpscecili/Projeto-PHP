<?php
function lerNota($indice) {
    echo "Digite a nota " . $indice . ": ";
    $handle = fopen("php://stdin", "r");
    $nota = trim(fgets($handle));
    return (float)$nota;
}

$nota1 = lerNota(1);
$nota2 = lerNota(2);
$nota3 = lerNota(3);
$nota4 = lerNota(4);


$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


echo "A média das quatro notas é: " . $media . "\n";
