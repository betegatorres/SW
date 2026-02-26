<?php
//Conversões Explícitas
$x = 3.5;
$y = 4.3 ;
$z = "9.9";
$n1 = (int) $x + $y;
$n2 = (int) ($x + $y);
$n3 = (float) ($y + $z);
echo "Resultados: $n1, $n2, $n3";
?>

<?php //7
$a = "Casal 20";
$b = 10;
$c = $a + $b;
echo $c;
?>

<?php //8
$pre = "hiper";
echo "${pre}texto";
?>

<?php //9
$x = "p";
$y = "H";
$z = "$x$y$x";
echo $z;
?>

<?php //10
define("inc", 2);
echo inc
?>
