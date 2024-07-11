<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Chamados</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Chamados</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="novo_chamado.php">Novo Chamado</a>
            <?php if (is_admin()): ?>
                <a href="register.php">Registrar</a>
            <?php endif; ?>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
