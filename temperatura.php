<?php

function lerTemperaturaFahrenheit() {
    echo "Digite a temperatura em Fahrenheit: ";
    $handle = fopen("php://stdin", "r");
    $temperaturaFahrenheit = trim(fgets($handle));
    return (float)$temperaturaFahrenheit;
}


$temperaturaFahrenheit = lerTemperaturaFahrenheit();


$temperaturaCelsius = ($temperaturaFahrenheit - 32) / 1.8;


echo "A temperatura em Fahrenheit é: " . $temperaturaFahrenheit . "°F\n";
echo "A temperatura em Celsius é: " . number_format($temperaturaCelsius, 2, ',', '.') . "°C\n";
