<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - tabela</title>
    <style>
        table,tr,td,th{
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <h1>Tabela de alunos</h1>

    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>

    <?php
        for ($i=1; $i <= 2 ; $i++){
            echo "<tr>";
            for ($j=1; $j <= 3 ; $j++){
                echo "<td>Linha $i Coluna $j </td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>