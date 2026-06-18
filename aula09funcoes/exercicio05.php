<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Funções</title>
</head>
<body>
    <h1>Aula de CNW | Exercicio 05 | 11/06/2026</h1>
</body>
</html>
<?php
    $temperaturas = [22.5, 24.0, 25.5, 23.0];
    function calcularMediaTemperatura($listaDeTemperaturas){
        $soma = array_sum($listaDeTemperaturas);
        $n = count($listaDeTemperaturas);   
        $media = $soma / $n;
        return $media;
    }
    $resultado = calcularMediaTemperatura($temperaturas);
    echo "A média da temperaturas registradas no Arduino é de: $resultado";
?>
