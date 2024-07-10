<?php
// Função para ler um valor (largura ou altura) do retângulo
function lerValor($descricao) {
    echo "Digite o valor da " . $descricao . " em metros: ";
    $handle = fopen("php://stdin", "r");
    $valor = trim(fgets($handle));
    return (float)$valor;
}

// Lendo a largura e a altura
$largura = lerValor("largura");
$altura = lerValor("altura");

// Calculando a área
$area = $largura * $altura;

// Exibindo o resultado
echo "A área do retângulo é: " . $area . " metros quadrados\n";
?>
