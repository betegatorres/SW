<?php
// /c:/xampp/htdocs/aula06/erro.php
// Página de erro para login com email inválido / falha
// Pode ser incluída após validação de login no controller

// carregar sessão caso use
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// mensagem padrão (pode vir de outra página via GET/SESSION)
$message = 'Erro no login: e-mail ou senha inválidos.';

if (!empty($_SESSION['login_error'])) {
    $message = htmlspecialchars($_SESSION['login_error'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    unset($_SESSION['login_error']);
} elseif (!empty($_GET['error'])) {
    $message = htmlspecialchars($_GET['error'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Erro de login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; color: #333; padding: 40px; }
        .box { max-width: 480px; margin: auto; background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,.12);}
        h1 { color: #c0392b; margin-top:0; }
        .msg { margin: 16px 0; }
        .actions a { display: inline-block; margin-right: 10px; padding: 8px 14px; text-decoration: none; border-radius: 4px; }
        .actions a.back { background:#3498db; color:#fff; }
        .actions a.home { background:#7f8c8d; color:#fff; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Falha no login</h1>
        <p class="msg"><?php echo $message; ?></p>
        <div class="actions">
            <a href="formulario.php" class="back">Voltar ao login</a>
            <a href="index.html" class="home">Página inicial</a>
        </div>
    </div>
</body>
</html>