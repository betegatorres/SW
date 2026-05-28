<?php
    $cores = ["Preto", "Branco", "Rosa"];
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }

    echo "<hr>";

    array_push($cores, "Azul");
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }

    echo "<hr>";
    
    array_shift($cores);
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }



?>