<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>exercicio1</title>
</head>

<body>

<table style="border-collapse: collapse; width: 300px;">

    <tr style="background-color: black; color: white;">
        <th style="border: 1px solid black; padding: 10px;">Coluna 1</th>
        <th style="border: 1px solid black; padding: 10px;">Coluna 2</th>
        <th style="border: 1px solid black; padding: 10px;">Coluna 3</th>
        <th style="border: 1px solid black; padding: 10px;">Coluna 4</th>
    </tr>

<?php

for($i = 1; $i <= 8; $i++){

    if($i % 2 == 0){
        echo "<tr style='background-color: lightblue;'>";
    } else {
        echo "<tr style='background-color: red; color: white;'>";
    }

    echo "<td style='border: 1px solid black; padding: 10px;'>$i</td>";
    echo "<td style='border: 1px solid black; padding: 10px;'>" . ($i + 2) . "</td>";
    echo "<td style='border: 1px solid black; padding: 10px;'>" . ($i + 4) . "</td>";
    echo "<td style='border: 1px solid black; padding: 10px;'>" . ($i + 6) . "</td>";

    echo "</tr>";
}

?>

</table>

</body>
</html>