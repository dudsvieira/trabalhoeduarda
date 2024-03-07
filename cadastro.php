<?php
if (isset($_POST['submit'])){ 
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro_users(nome,email,telefone,senha,conf_senha) VALUES ('$nome','$email','$telefone','$senha','$conf_senha')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Cadastro</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    button {
        background-color: #6107a6;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    </style>
</head>

<body>

  <form action  = "cadastro.php" method = "post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>


    <label for="telefone">Telefone:</label>
    <input type="texto" id="telefone" name="telefone" required>


    <label for="senha">Senha:</label>
    <input type="texto" id="senha" name="senha" required>

    <label for="conf_senha">Confirmar Senha:</label>
    <input type="texto" id="conf_senha" name="conf_senha" required>

    <button type="submit" name="submit" class="submit">Enviar</button>
    <a href="../bdd_dv/login.php">login</a>
</form>

</body>

</html>







