<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Lista de Itens</title>
</head>
<body>
    <h1>LISTA DE ITENS</h1>
    <ul>
        <!-- Aqui COMEÇA O LAÇO -->
        <?php
            for ($i=1; $i <= 3 ; $i++){
                echo "<li> Item $i</li>";
            }
        ?>
        <!-- AQUI TERMINA O LAÇO -->
    </ul>
</body>
</html>