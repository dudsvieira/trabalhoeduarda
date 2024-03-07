<?php
// Lógica de login aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nome de usuário'];
    $password = $_POST['senha'];

    // Adicione a lógica de autenticação aqui, consultando o banco de dados
    // e comparando as credenciais do usuário.

    // Exemplo básico de verificação (substitua pela lógica real):
    if ($username == 'usuario' && $password == 'senha') {
        echo "Login bem-sucedido!";
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
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
    <div class="container">
        <form action="login.php" method="POST">
            <h2>Login</h2>
            <label for="username">Usuário:</label>
            <input type="text" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" required>

            <button type="submit">Entrar</button>
            <a href="../bdd_dv/esqueci_a_senha.php">esqueci a senha</a>
        </form>
    </div>
</body>
</html>