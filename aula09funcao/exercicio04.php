<?php
    function verificacao($senha){
        switch ($senha) {
            case '123456':
                echo "liberado";
                break;
            default:
                echo "negado";
                break;
        }
    }
    verificacao("123456");
?>