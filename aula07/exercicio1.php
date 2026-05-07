    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 1</title>
        <style>
                td,th{
                border: 1px solid red;
            }
            table{
                border-collapse: collapse; 
                width: 20%;
            }
            .linha-impar{
                background-color: #ffff00;
            }
            .linha-par{
                background-color: #00FF00;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
                <th>Coluna 3</th>
                <th>Coluna 4</th>
            </tr>
            <?php
                $i = 1;

                for ($i = 1; $i <= 8; $i++){
                echo "<tr>";
                echo "<td> $i </td>";           
                echo "<td> " . ($i +2) . "</td>"; 
                echo "<td> " . ($i +4) . "</td>";      
                echo "<td> " . ($i +6) . "</td>";   
                echo "</tr>";
                }

                if ($i % 2 != 0) {
                    echo "<tr class='linha-impar'>";
                } else {
                    echo "<tr class='linha-par'>";
                }


            ?>
        </table>
    </body>
    </html>