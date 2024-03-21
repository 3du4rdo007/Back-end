<?php


function decodificar($mensagem, $deslocamento) {
    $decodificada = "";
    $tamanho = strlen($mensagem);

    for ($i = 0; $i < $tamanho; $i++) {

        if (ctype_alpha($mensagem[$i])) {

            $codigo = ord($mensagem[$i]) - $deslocamento;

            if ($codigo < ord('A')) {
                $codigo += 26;
            }

            $decodificada .= chr($codigo);
        } else {
          
            $decodificada .= $mensagem[$i];
        }
    }
    return $decodificada;
}


$casos_de_teste = intval(fgets(STDIN));


for ($i = 0; $i < $casos_de_teste; $i++) {
  
    $mensagem = trim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));

    echo decodificar($mensagem, $deslocamento) . "\n";
}

?>
