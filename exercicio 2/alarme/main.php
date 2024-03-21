<?php

while (true) {

    list($hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme) = explode(" ", fgets(STDIN));

    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }

    $hora_atual_minutos = $hora_atual * 60 + $minuto_atual;
    $hora_alarme_minutos = $hora_alarme * 60 + $minuto_alarme;
    $minutos_para_dormir = ($hora_alarme_minutos - $hora_atual_minutos + 24 * 60) % (24 * 60);

    echo $minutos_para_dormir . "\n";
}

?>
