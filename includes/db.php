<?php
$servername = "localhost";
$username = "root";
$password = "Luc@1081";
$dbname = "sistema_chamados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
