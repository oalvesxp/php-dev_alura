<?php
/**
 * Created by VisualStudioCode.
 * User: oalves
 * Date: 28/11/2023
 * Description: Tabuada de 1 a 10 com saída formatada.
 */

 // Tabuada de 1 à 10 com saída formatada: 2 x 5 = 10
 for ($i = 1; $i <= 10; $i++) {
    echo "Tabuada do $i:" . PHP_EOL;
 
    for ($m = 1; $m <= 10; $m++) {
        $r = $i * $m;
        echo "$i x $m = $r" . PHP_EOL;
    }
    echo "\n";
 }