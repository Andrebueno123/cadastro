<?php
    if(!isset($_SESSION)){
        session_start();


    }
 
    $nome = $_SESSION ["nome"];
    
    /*
    if(isset($_POST["bt_nome"])){
        $nome = $_POST ["bt_nome"];
        $endereco = $_POST ["bt_endereco"];
        $estados = $_POST ["estados"];
        $Cidade = $_POST ["bt_Cidade"];
        $telefone = $_POST ["bt_telefone"];
        $Email = $_POST ["bt_Email"];
        $CPF = $_POST ["bt_CPF"];
        $Senha = $_POST["bt_Senha"];
    



        $senha = $_POST ["bt_Senha"];
        $rsenha = $_POST ["bt_rsenha"];
  
    }
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banco</title>
</head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">
    <body>
        <div class="conteiner">
            <p>Nome: <?php echo ($nome);?></p>
            <p>data de nascimento: <?php echo ($datadenascimento);?></p>
            <p>Estados: </p>
            <p>Cidade: </p>
            <p>telefone:</p>
          


            <a class= "form-control btn btn-success" href= "contato.php">voltar </a>
        </div>

    </body>
</html>