<?php
include 'includes/db.php';
include 'includes/auth.php';
include 'includes/functions.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$importancia = is_admin() ? $_POST['importancia'] : 'Média';
$id_usuario = get_user_id();

$sql = "INSERT INTO chamados (titulo, descricao, importancia, id_usuario) VALUES ('$titulo', '$descricao', '$importancia', '$id_usuario')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
