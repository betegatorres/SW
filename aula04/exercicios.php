<?php
    // 13) Considerando as instruções abaixo:
    $x = "100 vergonha";
    $y = 50;
    $z = 2 * $y;

    if ($x == $z){
    echo "São iguais";
    }else{
    echo "São diferentes”";
    }
    echo "<hr>";

    // 14) Considerando o trecho abaixo:
    $a = 4;
    $b = 8;
    $r = (($a==$b) || ($a+$b==12));

    if ($r == 1) {
        echo "Valor lógico = VERDADEIRO";
    }else {
        echo "Valor lógico = FALSO";
    }
    echo "<hr>";

    // 15) Considerando o trecho abaixo:
    $a1 = 4;
    $b1 = 8;
    $r1 = (($a==$b) && ($a+$b==12));

    if ($r1 == 1) {
        echo "Valor lógico = VERDADEIRO";
    }else {
        echo "Valor lógico = FALSO";
    }
    echo "<hr>";

    // 16) Considerando o trecho abaixo:
    $a2 = 5;
    $b2 = 10;
    $r2 = (($a<=$b) XOR (2*$a==$b));

    if ($r2 == 1) {
        echo "Valor lógico = VERDADEIRO";
    }else {
        echo "Valor lógico = FALSO";
    }
    echo "<hr>";

?>