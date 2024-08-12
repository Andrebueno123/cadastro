<?php
    include("conexao.php");

    if(!isset($_SESSION)){
        session_start();
    }

    
    if(isset($_POST['bt_senha'])){
        
        var_dump($_POST['bt_senha']);


        $senha = $_POST['bt_senha'];
        $rsenha = $_POST['bt_rsenha']; 

        $_SESSION["nome"] = $_POST['bt_nome'];

        if (isset($senha)){
            
            if($senha === $rsenha){
                /* Só vai executar os códigos abaixo
                se for VERDADEIRO. */ 
        
                
                $nome = $_POST['bt_nome'];
                $datadenascimento=$_POST['bt_datadenascimento'];
                $estados=$_POST['estados'];
                $cidade = $_POST['bt_cidades'];
                $telefone =$_POST['bt_telefone'];
                $email =$_POST['bt_email'];
                $cpf = $_POST['bt_cpf'];
                $senha = $_POST['bt_senha'];
                
    
                 $mysqli->query("INSERT INTO tabela_cadastro_de_cliente (nome, datadenascimento, estados, cidade, telefone, email, cpf, senha) values('$nome', '$datadenascimento', '$estados', '$cidade', '$telefone', '$email', '$cpf', '$senha')") or
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
    <title>Cadastro de Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">

</head>

<body>
    <div class="container text-center">
        <h1>Cadastro de Cliente</h1>
    </div>
    <div class="container">
        <form action="" method="post">

            <label for="">Nome:</label>
            <input class="form-control" type="text" name="bt_nome">
            <div class="mb-3">
                <label for="">data de nascimento:</label>
                <input class="form-control" type="text" name="bt_datadenascimento">
            </div>

            <div class="mb-3">
                <label for="">Selecione o seu estado:</label>
                <select class="form-select" id="estados" name="estados">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>


            <label for="">Cidade:</label>
            <input class="form-control" type="text" name="bt_cidades">

            <label for="">Telefone:</label>
            <input class="form-control" type="text" name="bt_telefone">

            <label for="">Email:</label>
            <input class="form-control" type="text" name="bt_email">

            <label for="">CPF:</label>
            <input class="form-control" type="text" name="bt_cpf">

            <label for="">Senha:</label>
            <input class="form-control" type="password" name="bt_senha" required>

            <div class="mb-3">
                <label for="">Repetir Senha:</label>
                <input class="form-control" type="password" name="bt_rsenha" required>
            </div>


            <input class="form-control btn btn-success" type="submit" value="Cadastrar"><br>
            <input class="form-control btn btn-secondary" type="reset" value="Voltar">

            <?php
                if(isset($mensagem)){

                    echo $mensagem;
                    
                }


            ?>
        </form>
</body>

</html>