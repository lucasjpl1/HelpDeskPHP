<?php
include 'includes/db.php';
include 'includes/auth.php';
include 'includes/functions.php';

// Verifica se o usuário é administrador
if (!is_admin()) {
    echo "Acesso negado.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        header('Location: login.php');
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro - Sistema de Chamados</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <main>
        <div class="main-container">
            <h2>Registrar</h2>
            <form method="post" action="">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                
                <label for="tipo">Tipo de Usuário:</label>
                <select id="tipo" name="tipo" required>
                    <option value="usuario">Usuário</option>
                    <option value="administrador">Administrador</option>
                </select>
                
                <button type="submit">Registrar</button>
            </form>
        </div>
    </main>
</body>
</html>
