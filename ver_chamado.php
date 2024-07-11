<?php
include 'includes/db.php';
include 'includes/auth.php';
include 'includes/header.php';
include 'includes/functions.php';

$id = $_GET['id'];
$sql = "SELECT chamados.*, usuarios.nome AS usuario_nome FROM chamados JOIN usuarios ON chamados.id_usuario = usuarios.id WHERE chamados.id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>" . $row["titulo"] . "</h2>";
    echo "<p>" . $row["descricao"] . "</p>";
    echo "<p>Importância: " . $row["importancia"] . "</p>";
    echo "<p>Status: " . $row["status"] . "</p>";
    echo "<p>Aberto por: " . $row["usuario_nome"] . " em " . $row["data_abertura"] . "</p>";

    if (is_admin()) {
        if ($row["status"] != "Fechado") {
            echo "<form action='encerrar_chamado.php' method='post'>
                    <input type='hidden' name='id' value='$id'>
                    <button type='submit'>Encerrar Chamado</button>
                  </form>";
        }
    }
} else {
    echo "Chamado não encontrado.";
}

$conn->close();
include 'includes/footer.php';
?>
