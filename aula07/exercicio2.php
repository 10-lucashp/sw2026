<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>exercicio 2</title>

    <style>

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
        }

    </style>

</head>

<body>

<form method="post">

    linhas:
    <input type="number" name="linhas">

    <br><br>

    colunas:
    <input type="number" name="colunas">

    <br><br>

    <input type="submit" value="gerar">

</form>

<br>

<?php

$linhas = $_POST["linhas"];
$colunas = $_POST["colunas"];

echo "<table style='border-collapse: collapse;'>";

$i = 1;

while($i <= $linhas){

    echo "<tr>";

    $j = 1;

    while($j <= $colunas){

        echo "<td style='border: 1px solid black; padding: 10px; text-align:center;'>
                $i x $j
              </td>";

        $j++;
    }

    echo "</tr>";

    $i++;
}

echo "</table>";

?>

</body>
</html>