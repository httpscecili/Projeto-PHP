<?php

function lerPeso() {
    echo "Digite o peso do prato em quilos: ";
    $handle = fopen("php://stdin", "r");
    $peso = trim(fgets($handle));
    return (float)$peso;
}


const PRECO_POR_QUILO = 45.00;


$pesoPrato = lerPeso();


$valorPagar = $pesoPrato * PRECO_POR_QUILO;


echo "O valor a pagar é: R$ " . number_format($valorPagar, 2, ',', '.') . "\n";
