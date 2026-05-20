    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>exercicio 3</title>
</head>

<body>

<?php

$produtos = [

    [
        "nome" => "mouse",
        "preco" => "50",
        "categoria" => "informatica"
    ],

    [
        "nome" => "camisa",
        "preco" => "80",
        "categoria" => "roupa"
    ],

    [
        "nome" => "teclado",
        "preco" => "120",
        "categoria" => "informatica"
    ],

    [
        "nome" => "tenis",
        "preco" => "200",
        "categoria" => "calcado"
    ]

];

echo "<table style='border-collapse: collapse; width: 400px;'>";

echo "
<tr style='background-color: black; color: white;'>

    <th style='border:1px solid black; padding:10px;'>nome</th>

    <th style='border:1px solid black; padding:10px;'>preço</th>

    <th style='border:1px solid black; padding:10px;'>categoria</th>

</tr>
";

foreach($produtos as $produto){

    if($produto["categoria"] == "informatica"){
        $cor = "lightblue";
    }

    else if($produto["categoria"] == "roupa"){
        $cor = "lightpink";
    }

    else{
        $cor = "lightgreen";
    }

    echo "<tr style='background-color:$cor;'>";

    echo "<td style='border:1px solid black; padding:10px;'>
            ".$produto["nome"].
         "</td>";

    echo "<td style='border:1px solid black; padding:10px;'>
            R$ ".$produto["preco"].
         "</td>";

    echo "<td style='border:1px solid black; padding:10px;'>
            ".$produto["categoria"].
         "</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>