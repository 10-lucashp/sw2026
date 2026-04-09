<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Erro</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: #00ff00;
        }

        img {
            width: 1200px; /* DIMINUI A IMAGEM AQUI */
            max-width: 90%;
            border-radius: 10px;
        }

        .mensagem {
            margin-top: 20px;
            font-size: 20px;
            text-align: center;
        }

        .btn {
            margin-top: 15px;
            padding: 12px 25px;
            background-color: #00ff00;
            color: #000;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #00cc00;
        }
    </style>
</head>
<body>

    <!-- AJUSTA O CAMINHO DA IMAGEM -->
    <img src="assets/img/error.png" alt="Imagem de erro">

    <div class="mensagem">
        login não encontrado erro 67
    </div>

    <button class="btn" onclick="voltar()">Voltar</button>

    <script>
        function voltar() {
            window.location.href = "index.php";
        }
    </script>

</body>
</html>