<?php
    $temperatura = [24.0, 22.5, 25.5, 23.0];
    function mediatemp($lista){
        $soma = array_sum($lista);
        $i = count($lista);   
        $media = $soma / $i;
        return $media;
    }
    $resultado = mediatemp($temperatura);
    echo "A media de temperatura do arduino é: $resultado";
?>