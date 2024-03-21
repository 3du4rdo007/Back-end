<?php


$leds_por_digito = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];


function calcularLeds($numero) {
    global $leds_por_digito;
    $total_leds = 0;

    $digitos = str_split($numero);

    foreach ($digitos as $digito) {
        $total_leds += $leds_por_digito[$digito];
    }
    return $total_leds;
}


$casos_de_teste = intval(fgets(STDIN));


for ($i = 0; $i < $casos_de_teste; $i++) {

    $valor = trim(fgets(STDIN));

    echo calcularLeds($valor) . " leds\n";
}

?>
