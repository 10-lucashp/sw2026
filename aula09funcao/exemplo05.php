<?php
 
    function msg($periodo) {
        // if ($periodo == "manhão") {
        //     echo "Bom dia";
        // } else {
        //     if ($periodo == "tarde") {
        //         echo "Boa tarde";
        //     } else {
        //       if ($periodo == 'noite') {
        //         echo "Baa noite";
        //       } else {
        //         echo "Valor invalido";
        //       }
              
        //     }
            
        // }

        switch ($periodo) {
            case 'manhão' || "Manhão":
                echo "Bom dia";
                break;
            case 'tarde':
                echo "Boa tarde";
                break;
            case 'noite':
                echo "Baa noite";
                break;
            
            default:
                echo "Valor invalido";
                break;
        }

    }

    msg("manhão");

?>