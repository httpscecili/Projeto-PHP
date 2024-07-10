<?php
function lerRaio() {
    echo "Digite o valor do raio da circunferência: ";
    $handle = fopen("php://stdin", "r");
    $raio = trim(fgets($handle));
    return (float)$raio;
}


const PI = 3.141592653589793;


$raio = lerRaio();


$diametro = 2 * $raio;


$comprimento = 2 * PI * $raio;


$area = PI * $raio * $raio;


echo "O diâmetro da circunferência é: " . number_format($diametro, 2, ',', '.') . " unidades\n";
echo "O comprimento da circunferência é: " . number_format($comprimento, 2, ',', '.') . " unidades\n";
echo "A área da circunferência é: " . number_format($area, 2, ',', '.') . " unidades quadradas\n";

