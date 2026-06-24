<?php
    function classificarAluno($nota){
        if ($nota >=7) {
            return "Aprovado";
        } elseif ($nota >=5) {
            return "Recuperação";
        } else{
            return "Reprovado";
        }
    }

    $notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
    $aprovado = 0;
    $recuperacao = 0;
    $reprovado = 0;
    
    $soma = 0;

    foreach ($notas as $indice => $nota) {
        $situacao = classificarAluno($nota);

        echo "Aluno " .($indice+1). ": Nota: $nota -->$situacao <br>";

        if ($situacao === "Aprovado") {
            $aprovado++;
        } elseif ($situacao === "Recuperação") {
            $recuperacao++;
        } else {
            $reprovado++;
        }

        $soma = $soma + $nota;
    }

    $media = $soma / count($notas);

    echo "<hr>Situação da Turma: <br>";
    echo "Aprovados: $aprovado <br>";
    echo "Recuperação: $recuperacao <br>";
    echo "Reprovados: $reprovado <br>";
    echo "Média da sala: $media <br>";

    if ($media >=7) {
        echo "<hr>Turma com bom desempenho!";
    } else {
        echo "<hr>A turma precisa melhorar...";
    }
    

?>