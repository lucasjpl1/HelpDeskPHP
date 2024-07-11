<?php
include 'includes/auth.php';
include 'includes/db.php';
include 'includes/functions.php';
include 'includes/header.php';
?>

<main>
    <div class="main-container">
        <h2>Criar Novo Chamado</h2>
        <form action="criar_chamado.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>
            
            <?php if (is_admin()): ?>
            <label for="importancia">Importância:</label>
            <select id="importancia" name="importancia">
                <option value="Baixa">Baixa</option>
                <option value="Média">Média</option>
                <option value="Alta">Alta</option>
            </select>
            <?php endif; ?>
            
            <button type="submit">Criar Chamado</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
