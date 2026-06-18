<?php
    function calcularDesconto($valorDaCompra) {
    // Calculamos o desconto (10% do valor)
    $desconto = $valorDaCompra * 0.10;
    
    // Subtraímos o desconto do valor original
    $valorFinal = $valorDaCompra - $desconto;

    // Devolvemos o valor final pronto!
    return $valorFinal;
    }

    // Usando a função na prática:
    $totalCarrinho = 250.00;

    $valorAPagar = calcularDesconto($totalCarrinho);

    echo "Valor original: R$ " . $totalCarrinho . "<br>";

    echo "Valor com desconto: R$ " . $valorAPagar;
?>