<?php

// Cálculo de Índice de Massa Corporal

echo "Cálculo de IMC \n\n";

$cliente = "Anderson";
$peso = 92;
$altura = 1.93;

$imc = $peso / ($altura ** 2);

echo "Cliente: $cliente \n";
echo "Peso: $peso kg\n";
echo "Altura: $altura m\n";
echo "IMC: " . number_format($imc, 2) . "\n\n";

// Classificação do IMC (OMS completa)
if ($imc < 16) {
    echo "Magreza grau 3 (grave)";
} elseif ($imc >= 16 && $imc <= 16.9) {
    echo "Magreza grau 2 (moderada)";
} elseif ($imc >= 17 && $imc <= 18.4) {
    echo "Magreza grau 1 (leve)";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Peso normal (Eutrofia)";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Sobrepeso";
} elseif ($imc >= 30 && $imc <= 34.9) {
    echo "Obesidade grau 1";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Obesidade grau 2";
} else { // IMC >= 40
    echo "Obesidade grau 3 (mórbida)";
}

?>