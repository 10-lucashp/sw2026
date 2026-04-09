<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // email: adm@gmail.com
    // senha: 1234
    
    if ($email == 'anonimos@gmail.com' && $senha == '67') {
        // vamos para a área restrita...
        //echo "vamos para a área restrita...";
        $nome = "Lucas";

        header('Location: telainicialposlogin.php?nome=' . $nome);
    } else {
        header('Location: error.php');
    }



    ?>
</body>

</html>