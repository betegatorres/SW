<?php
    $num = [4, 17, 2, 9, 23, 11];
    foreach ($num as $num2) {
        echo "$num2 <br>";
    }

    echo "<hr>";

    sort($num);
    foreach ($num as $num2) {
        echo "$num2 <br>";
    }

    echo "<hr>";

    rsort($num);
    foreach ($num as $num2) {
        echo "$num2 <br>";
    }
?>