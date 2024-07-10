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

$total = $nota1 + $nota2 + $nota3 + $nota4;

// Exibindo o resultado
echo "A pontuação total das quatro notas é: " . $total . "\n";
