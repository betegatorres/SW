<?php
        $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

    function classificarAluno($nota){
        if ($nota >= 7) {
            return "Aprovado <br>";
        } elseif ($nota >= 5) {
            return "Recuperação <br>";
        } elseif ($nota < 5) {
            return "Reprovado <br>";
        } else {
            return "Valor Inválido...";
        }
    }

    classificarAluno($notas);

    
    foreach ($notas as $indice => $nota) {
        echo "Aluno ".($indice +1).": Nota = $nota ->".classificarAluno($nota)."<br>";
    }




?>