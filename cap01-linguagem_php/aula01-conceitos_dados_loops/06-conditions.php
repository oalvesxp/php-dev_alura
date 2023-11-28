<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Condicionamento com IF e ELSE.
 */

 // Compara valores numéricos: Maior que (>), Menor que (<), Maior ou igual a (>=), Menor ou igual a (<=)

 $idade = 25;
 
 if ($idade > 18) {
     echo "Você é maior de idade." . PHP_EOL;
 } else {
     echo "Você é menor de idade." . PHP_EOL;
 }

 // Verifica se os valores são iguais: Igualdade (==)
 $a = 5;
 $b = "5";
 
 if ($a == $b) {
     echo "Os valores são iguais." . PHP_EOL;
 } else {
     echo "Os valores são diferentes." . PHP_EOL;
 }

 // Veifica se os valores são iguais e do mesmo tipo: Igualdade Estrita (===)
 $a = 5;
 $b = "5";
 
 if ($a === $b) {
     echo "Os valores são iguais e do mesmo tipo." . PHP_EOL;
 } else {
     echo "Os valores são diferentes ou do tipo diferente." . PHP_EOL;
 }

 // Verifica se dois valores são diferentes: Desigualdade (!= ou <>)
 $x = 10;
 $y = 5;
 
 if ($x != $y) {
     echo "Os valores são diferentes." . PHP_EOL;
 } else {
     echo "Os valores são iguais." . PHP_EOL;
 }

 // Verifica se dois valores são diferentes e do mesmo tipo: Desigualdade Estrita (!==)
 $x = 10;
 $y = "10";

 if ($x !== $y) {
     echo "Os valores são diferentes ou do tipo diferente." . PHP_EOL;
 } else {
     echo "Os valores são iguais e do mesmo tipo." . PHP_EOL;
 }

 // Permitem combinar condições: Operadores Lógicos (&&, ||, !)
 $nota = 75;
 
 if ($nota >= 70 && $nota <= 100) {
     echo "Você passou no exame." . PHP_EOL;
 } else {
     echo "Você não passou no exame." . PHP_EOL;
 }

 echo "\n";
 // Exercício
 // Permite fazer uma condição composta: IF, ELSEIF e ELSE
 $nota = 4.5;

 if ($nota >= 8) {
     echo "Parabéns! Você passou de ano direto." . PHP_EOL;
 } elseif ($nota >= 5 && $nota <= 7.5) {
     echo "Você está de recuperação. Faça o exercício de recuperação." . PHP_EOL;
 } else {
     echo "Infelizmente, você reprovou na matéria." . PHP_EOL;
 }
