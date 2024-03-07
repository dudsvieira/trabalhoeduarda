<?php
// Lógica de definição de nova senha aqui
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];

    // Adicione a lógica de verificação do token e atualização da senha no banco de dados.
    // Isso pode envolver a verificação do token, a expiração do token e a atualização da senha.

    // Exemplo básico (substitua pela lógica real):
    echo "Senha redefinida com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha</title>
    
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
        <form action="senha_nova.php" method="POST">
            <h2>Nova Senha</h2>
            <label for="token">Token:</label>
            <input type="text" name="token" required>

            <label for="new_password">Nova Senha:</label>
            <input type="password" name="new_password" required>

            <button type="submit">Redefinir Senha</button>
        </form>
    </div>
</body>
</html>