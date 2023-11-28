<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Loops com condições.
 */

 // Pulando um número dentro do loop
 for ($i= 1; $i <= 15; $i++) {
    if ($i == 13) {
        continue;
    } else {
        echo "$i" . PHP_EOL;
    }
 }

 // Parando o loop quando chega a determinado número
 for ($i= 1; $i <= 15; $i++) {
    if ($i == 13) {
        break;
    } else {
        echo "$i" . PHP_EOL;
    }
 }