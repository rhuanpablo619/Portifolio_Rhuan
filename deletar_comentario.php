<?php
// Arquivo: deletar_comentario.php (Operação DELETE)

$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "portfolio_db"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $conn->real_escape_string($_POST['id']);

    // Query para Deletar
    $sql = "DELETE FROM comentarios WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta após a exclusão
        header("Location: index.php?status=deleted#contato");
        exit();
    } else {
        echo "Erro ao deletar comentário: " . $conn->error;
    }
} else {
    header("Location: index.php"); // Redireciona se o ID não for fornecido
    exit();
}

$conn->close();
?>