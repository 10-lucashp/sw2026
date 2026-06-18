<?php
    
    $n =$_POST['nome'];
    

    function msg($nome) {
        echo "Bom dia $nome <br>";
    }

    msg($n);
    msg("Simon");

?>