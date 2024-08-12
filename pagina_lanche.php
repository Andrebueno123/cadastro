<?php
    include("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    }

    
    if(isset($_POST['bt_lanche'])){
        
        var_dump($_POST['bt_lanche']);


        $_SESSION["lanche"] = $_POST['bt_lanche'];

        if (isset($lanche)){
            
            if($lanche === $lanche){
                /* Só vai executar os códigos abaixo
                se for VERDADEIRO. */ 
        
                
                $lanche = $_POST['bt_lanche'];
                $valor =$_POST['bt_valor'];
                $unidade =$_POST['unidade'];
                $igredientes = $_POST['bt_igredientes'];
               
                
    
                 $mysqli->query("INSERT INTO  (lanche, valor, unidade, igredientes) values('$lanche', '$valor', '$unidade', '$igredientes')") or
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
    <title>Cadastro de lanche</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">


</head>
<body>
    <div class="container text-center">
    <h1>Cadastro de lanche</h1>
    </div>
    <div class="container">
        <form action="" method="post">

        <div class="mb-3">
                <label for="">Selecione o seu lanche:</label>
                <select class="form-select" id="lanche" name="lanche">
                    <option value="">X-Bacon</option>
                    <option value="">X-tudo</option>
                    <option value="">X-salada</option>
                    <option value="">X-EGG</option>
                    <option value="">X-vegano</option>
                    <option value="">X-Vegetariano</option>
                    <option value="">X-Infarto</option>
                    <option value="">Fogaça/carne</option>
                    <option value="">Fogaça/frango com catupiry</option>
                    <option value="">Fogaça/calabresa</option>
                    <option value="">Fogaça/palmito</option>
                    <option value="">Fogaça/vegetariano></option>
                    <option value="">Pastel/carne</option>
                    <option value="">Pastel/calabresa</option>
                    <option value="">Pastel/frango com catupiry</option>
                    <option value="">Pastel/palmito</option>
                    <option value="">Pastel/vegetariano</option>
                    <option value="">Esfiha/carne</option>
                    <option value="">Esfiha/calabresa</option>
                    <option value="">Esfiha/frango</option>
                    <option value="">Esfiha/frango com catupiry</option>
                    <option value="">Esfiha/palmito</option>
                    <option value="">Esfiha/vegetariano</option>
                    <option value="">Esfiha/vegano</option>
                    <option value="">Porçao/salada</option>
                    <option value="">Porçao/batata</option>
                    <option value="">Porçao/cebola</option>
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
