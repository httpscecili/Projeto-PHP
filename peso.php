<?php
function lerPeso() {
    echo "Digite o peso em quilos: ";
    $handle = fopen("php://stdin", "r");
    $peso = trim(fgets($handle));
    return (float)$peso;
}


$pesoQuilos = lerPeso();


$pesoGramas = $pesoQuilos * 1000;


echo "O peso em gramas é: " . $pesoGramas . " g\n";

