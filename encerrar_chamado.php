<?php
include 'includes/db.php';
include 'includes/auth.php';
include 'includes/functions.php';

if (is_admin() && $_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $sql = "UPDATE chamados SET status='Fechado' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: ver_chamado.php?id=' . $id);
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Acesso negado.";
}
?>
