<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Desafio de criar um contador para números impares de 0 a 100.
 */

 // Contador de números impares de 0 a 100
 for ($i = 0; $i <= 100; $i ++) {
     if ($i % 2 == 0) {
         continue; 
     } else {
        echo $i . " ";
     }     
 }

 echo "\n";
