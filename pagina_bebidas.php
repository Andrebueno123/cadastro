<?php
    include("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    }

    
    if(isset($_POST['bt_bebidas'])){
        
        var_dump($_POST['bt_bebidas']);


        $_SESSION["bebidas"] = $_POST['bt_bebidas'];

        if (isset($lanche)){
            
            if($lanche === $lanche){
                /* Só vai executar os códigos abaixo
                se for VERDADEIRO. */ 
        
                
                $bebidas = $_POST['bt_bebidas'];
                $valor =$_POST['bt_valor'];
                $unidade =$_POST['unidade'];
                $igredientes = $_POST['bt_igredientes'];
               
                
    
                 $mysqli->query("INSERT INTO  (bebidas, valor, unidade, igredientes) values('$bebidas', '$valor', '$unidade', '$igredientes')") or
                    die($mysqlierrno);
                
                
                //header("Location:banco.php"); /* Mudar de página */
                
        
            }else{
                
                /* else é o senão */
                /* Quando for falso executar os códigos
                abaixo: */
                $mensagem = "<div class='alert alert-danger mt-3'> Senha inválida </div>";
        
            }
        }
    }
    
    
    
    
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">


</head>
<body>
    <div class="container text-center">
    <h1>Cadastro de Bebidas</h1>
    </div>
    <div class="container">
        <form action="" method="post">

        <div class="mb-3">
                <label for="">Selecione a sua Bebidas:</label>
                <select class="form-select" id="lanche" name="lanche">
                    <option value="">Refrigerante/Coca Cola</option>
                    <option value="">Refrigerente/Coca Cola Zero</option>
                    <option value="">Refrigerante/Guarana</option>
                    <option value="">Refrigerante/Guarana Zero</option>
                    <option value="">Refrigerante/Sprit</option>
                    <option value="">Refrigerante/Gengibre</option>
                    <option value="">Refrigente/acerola</option>
                    <option value="">Gin tonica</option>
                    <option value="">Gin pina colada</option>
                    <option value="">Gin sprint hot</option>
                    <option value="">caipirinha cachaca com limao</option>
                    <option value="">caipirinha cachaca com morango</option>
                    <option value="">caipirinha cachaca com acerola</option>
                    <option value="">caipirinha cachaca com maracuja</option>
                    <option value="">caipirinha cachaca com abacaxi</option>
                    <option value="">caipirinha cachaca/ mix de frutas</option>
                    <option value="">caipirinha de vodca com limao </option>
                    <option value="">caipirinha de vodca com morango</option>
                    <option value="">caipirinha de vodca com acerola</option>
                    <option value="">caipirinha de vodca com maracuja</option>
                    <option value="">caipirinha de vodca com abacaxi</option>
                    <option value="">caipirinha de vodca/ mix de frutas</option>
                    <option value="">caipirinha de vodca de frutas de vermelhas</option>
                    <option value="">bebidas sem alccool</option>
                    <option value="">agua com gas</option>
                    <option value="">agua sem gas </option>
                    
                </div>
            </select>
        <div>

            <label for="">Valor:</label>
            <input class="form-control" type="text" name="bt_valor">


            <label for="">Unidade:</label>
            <input class="form-control" type="text" name="bt_unidade">



            <label for="">Igredientes:</label>
            <input class="form-control" type="text" name="bt_igredientes">

            <input class="form-control btn btn-success" type="submit" value="Cadastrar"><br>
            <input class="form-control btn btn-secondary" type="reset" value="Voltar">
        </div>
    </form>
</body>
</html>
