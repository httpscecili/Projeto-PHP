<?php
function lerValor($descricao) {
    echo "Digite o valor " . $descricao . ": ";
    $handle = fopen("php://stdin", "r");
    $valor = trim(fgets($handle));
    return (float)$valor;
}

$valor1 = lerValor(1);
$valor2 = lerValor(2);

if ($valor2 == 0) {
    echo "Erro: Divisão por zero não é permitida.\n";
} else {
    // Calculando a divisão
    $divisao = $valor1 / $valor2;
    
    // Exibindo o resultado
    echo "A divisão do primeiro valor pelo segundo é: " . $divisao . "\n";
}

