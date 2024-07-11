<?php
include 'includes/auth.php';
include 'includes/db.php';
include 'includes/header.php';
include 'includes/functions.php';
?>

<main>
    <div class="main-container">
        <h2>Lista de Chamados</h2>
        <?php
        $sql = "SELECT chamados.id, titulo, descricao, status, data_abertura, usuarios.nome AS usuario_nome 
                FROM chamados 
                JOIN usuarios ON chamados.id_usuario = usuarios.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='ver_chamado.php?id=" . $row["id"] . "'>" . $row["titulo"] . "</a> - " . $row["status"] . " - " . $row["usuario_nome"] . " - " . $row["data_abertura"] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Nenhum chamado encontrado.";
        }
        ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
