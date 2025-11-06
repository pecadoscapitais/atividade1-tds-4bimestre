<?php

    $data = readline("Informe uma data, ex: 2025-01-01 (ano-mês-dia): "); //infome a data com os hífens.
    $inicio = strtotime("$data"); //converte a data informada para segundos.
    $agora = time(); 
    $dias = floor(($agora - $inicio) / (60 * 60 * 24)); //converte a diferença da data atual e a data informada de segundos para dias.

    print("Já se passaram $dias dias desde $data");

?>
