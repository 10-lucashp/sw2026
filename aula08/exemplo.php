<?php
    $frutas = ["maçã","banana","Laranja"];
    // echo $frutas[0];

    // foreach ($frutas as $indice => $valor) {
    //     echo "Indice : $indice ==> $valor <br>";
    // }
    // $qtde = count($frutas);
    // for ($i=0; $i <= $qtde -1 ; $i++) { 
    //     // echo $i . "<br>";
    //     echo "$frutas[$i] <br>";
    // }

    $animais = ["gato","cachorro"];
    $animais[] = "paasarinho";
    
    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    $animais[1] = "tartaruga";
    foreach ($animais as $valor) {
            echo "$valor <br>";
        }

    echo "<hr>";

    array_push($animais,"peixe");
    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_pop($animais);
    foreach ($animais as $chave => $valor) {
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

    array_unshift($animais,"bob");
    foreach ($animais as $chave => $valor){
        echo "$chave ==> $valor <br>";
    }

    echo "<hr>";

?>