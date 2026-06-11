<?php
    function msg($periodo){
        // if ($periodo == 'manhã') {
        //     echo "Bom dia <br>";

        // } else  {
        //    if ($periodo == 'tarde') {
        //     echo "Boa tarde <br>";
        //    } else {
        //         if ($periodo == 'noite') {
        //             echo "Boa noite <br>";
        //         } else {
        //             echo " Valor Inválido...";
        //         } 
        //    } 
        // }  

        switch ($periodo) {
            case 'manhã' || 'Manhã':
                echo "Bom Dia!";
                break;
            case 'tarde':
                echo "Boa tarde!";
                break;
            case 'noite':
                echo "Boa noite!";
                break;

            default:
                echo " Valor Inválido...";
                break;
        }
    }

    msg("manhã");




?>