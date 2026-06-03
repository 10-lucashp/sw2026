<?php

$numeros = [10, 25, 7, 42, 18, 99, 3, 56, 81, 14];
$qtde = count($numeros);
$valor = 0;
for ($i=0; $i <= $qtde-1 ; $i++) { 
    $valor = $valor + $numeros[$i]; 
}
$media = $valor/$qtde;
?>