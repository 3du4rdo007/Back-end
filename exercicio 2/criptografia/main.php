<?php


$n = intval(fgets(STDIN));


for ($i = 0; $i < $n; $i++) {

    $linha = trim(fgets(STDIN));
    $tamanho = strlen($linha);
    $metade = intval($tamanho / 2);

    for ($j = 0; $j < $tamanho; $j++) {
        if (ctype_alpha($linha[$j])) {
            $linha[$j] = chr(ord($linha[$j]) + 3);
        }
    }

    $linha = strrev($linha);

    for ($j = $metade; $j < $tamanho; $j++) {
        if (ctype_alpha($linha[$j])) {
            $linha[$j] = chr(ord($linha[$j]) - 1);
        }
    }

    echo $linha . "\n";
}

?>
