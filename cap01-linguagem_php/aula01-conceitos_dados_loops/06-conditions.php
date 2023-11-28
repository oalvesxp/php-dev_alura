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
     echo "Você é maior de idade.";
 } else {
     echo "Você é menor de idade.";
 }

 // Verifica se os valores são iguais: Igualdade (==)
 $a = 5;
 $b = "5";
 
 if ($a == $b) {
     echo "Os valores são iguais.";
 } else {
     echo "Os valores são diferentes.";
 }

 // Veifica se os valores são iguais e do mesmo tipo: Igualdade Estrita (===)
 $a = 5;
 $b = "5";
 
 if ($a === $b) {
     echo "Os valores são iguais e do mesmo tipo.";
 } else {
     echo "Os valores são diferentes ou do tipo diferente.";
 }

 // Verifica se dois valores são diferentes: Desigualdade (!= ou <>)
 $x = 10;
 $y = 5;
 
 if ($x != $y) {
     echo "Os valores são diferentes.";
 } else {
     echo "Os valores são iguais.";
 }

 // Verifica se dois valores são diferentes e do mesmo tipo: Desigualdade Estrita (!==)
 $x = 10;
 $y = "10";

 if ($x !== $y) {
     echo "Os valores são diferentes ou do tipo diferente.";
 } else {
     echo "Os valores são iguais e do mesmo tipo.";
 }

 // Permitem combinar condições: Operadores Lógicos (&&, ||, !)
 $nota = 75;
 
 if ($nota >= 70 && $nota <= 100) {
     echo "Você passou no exame.";
 } else {
     echo "Você não passou no exame.";
 }
