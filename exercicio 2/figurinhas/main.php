<?php


$casos_de_teste = intval(fgets(STDIN));


for ($i = 0; $i < $casos_de_teste; $i++) {

    list($ricardo, $vicente) = explode(" ", fgets(STDIN));

    $tamanho_maximo = gcd($ricardo, $vicente);

    echo $tamanho_maximo . "\n";
}


function gcd($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

?>
