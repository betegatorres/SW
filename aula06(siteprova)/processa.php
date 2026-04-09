<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // email: adm@email.com
    // senha: 1234

    if ($email == 'adm@email.com' && $senha == '1234') {
        $nome = "Torres";
        header('Location: restrita.php?nome=' . $nome);
    } else {
        header('Location: erro.php');
    }
?>