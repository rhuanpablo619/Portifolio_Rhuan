<?php
// Arquivo: salvar_comentario.php - Lógica de Inserção no MySQL

// CONFIGURAÇÕES DE CONEXÃO DO XAMPP
$servername = "localhost";
$username = "root";       
$password = "";           // Senha vazia (padrão do XAMPP)
$dbname = "portfolio_db"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Coletar e limpar (sanitizar) os dados do formulário
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $comentario = $conn->real_escape_string($_POST['comentario']);

    // Query para inserção
    $sql = "INSERT INTO comentarios (nome, email, comentario_texto) VALUES ('$nome', '$email', '$comentario')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta com parâmetro de sucesso
        header("Location: index.php?status=success#contato");
        exit();
    } else {
        echo "Erro ao inserir comentário: " . $conn->error;
    }
}

$conn->close();
?>