<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data,cidade,estado,endereco)
    VALLUES ('$nome', '$email', '$telefone', '$genero', '$nascimento', '$cidade', '$estado', '$endereco')");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser">
                    <Label for="nome" class="labelInput">Nome completo</Label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser">
                    <Label for="nome" class="labelInput">E-mail</Label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser">
                    <Label for="nome" class="labelInput">Telefone</Label>
                </div>
                <br>
                <p>Sexo</p>
                <div>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="Masculino">Masculino</label>
                    <input type="radio" id="feminino" name="genero" value="Feminino" required>
                    <label for="Feminino">Feminino</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="date" name="nascimento" id="nascimento" class="inputUser">
                    <br><Label for="data_de_nascimento" class="labelInput"><b>Data de Nascimento</b></Label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser">
                    <Label for="nome" class="labelInput">Cidade</Label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser">
                    <Label for="nome" class="labelInput">Estado</Label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereço" id="endereço" class="inputUser">
                    <Label for="nome" class="labelInput">Endereço</Label>
                </div>
                <br>
                <div>
                    <input type="submit" name="submit" id="submit">
                </div> 
            </fieldset>
        </form>
    </div>
    
</body>
</html>