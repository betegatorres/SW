<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Dados</title>
</head>
<body>
    <?php
      $nome = $_GET['nome'];
      $email = $_GET['email'];
      $idade = $_GET['idade'];
      $ano_atual = date('Y');
      $ano = $ano_atual - $idade;

      
      //echo $ano_atual;

    ?>
    
    <p>O nome digitado é: <?php echo $nome; ?> </p>
    <p>O email digitado é: <?php echo $email; ?> </p>
    <p>A idade digitado é: <?php echo $idade; ?> </p>
    <p>Nascido em: <?php echo $ano; ?> </p>

</body>
</html>