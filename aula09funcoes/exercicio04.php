<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exercicio 04 | 11/06/2026</h1>
</body>
</html>
<?php
    function verificarAcesso($senhaDigitada){
        switch ($senhaDigitada) {
            case '123456':
                echo "Acesso Liberado";
                break;
            default:
                echo "Acesso Negado";
                break;
        }
    }
    verificarAcesso("123456");
?>