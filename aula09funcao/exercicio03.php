<?php
    function calculoanatomico($bateriatotal, $consumo) {
        $total = $bateriatotal / $consumo;
        return "Tempo estimado de voo: $total minutos.";
    }

    $bateriatotal = 50;
    $consumo = 5;

    $retorno = calculoanatomico($bateriatotal, $consumo); 
    echo $retorno;

?>