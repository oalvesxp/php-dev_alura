<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Calculador de IMC.
 */

 // Calculadora de IMC
 // Solicitando os dados ao usuário
 $peso = readline("Digite o seu peso (Kg): ");
 $altura = readline("Digite a sua altura (m): ");

 // Calcula o IMC
 $imc = $peso / ($altura * $altura);

 // Classificação do IMC 
 if ($imc < 18.5) {
    $print = "Abaixo do peso";
 } elseif ($imc >= 18.5 && $imc < 25) {
    $print = "Peso normal";
 } elseif ($imc >= 25 && $imc < 30) {
    $print = "Sobrepeso";
 } else {
    $print = "Obesidade";
 }

 
 // Exibindo o resultado
 echo "\nSeu IMC é: " . number_format($imc, 2) . PHP_EOL;
 echo "Classificação: $print" . PHP_EOL;
 