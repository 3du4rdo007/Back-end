<?php

while ($numeroLesmas = fgets(STDIN)) {
    $numeroLesmas = intval(trim($numeroLesmas));
    $velocidades = explode(" ", fgets(STDIN));
    $velocidades = array_map('intval', $velocidades);

    $velocidadeMaxima = max($velocidades);

    if ($velocidadeMaxima < 10) {
        $nivelVelocidade = 1;
    } elseif ($velocidadeMaxima < 20) {
        $nivelVelocidade = 2;
    } else {
        $nivelVelocidade = 3;
    }

    echo $nivelVelocidade;
}
?>
