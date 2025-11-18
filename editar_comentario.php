<?php
// Arquivo: editar_comentario.php (Operação UPDATE)

$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "portfolio_db"; 
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$comentario = null;

// --- PARTE 1: CARREGAR DADOS EXISTENTES (READ) ---
if (isset($_GET['id']) && $_SERVER["REQUEST_METHOD"] != "POST") {
    $id = $conn->real_escape_string($_GET['id']);
    
    $sql = "SELECT id, nome, email, comentario_texto FROM comentarios WHERE id = '$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $comentario = $result->fetch_assoc();
    } else {
        echo "Comentário não encontrado.";
        exit();
    }
}

// --- PARTE 2: PROCESSAR A ATUALIZAÇÃO (UPDATE) ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $conn->real_escape_string($_POST['id']);
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $comentario_texto = $conn->real_escape_string($_POST['comentario_texto']);

    // Query para Atualizar
    $sql_update = "UPDATE comentarios SET nome='$nome', email='$email', comentario_texto='$comentario_texto' WHERE id='$id'";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: index.php?status=updated#contato");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}

// Se o comentário não foi carregado, redireciona.
if (!$comentario) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Comentário</title>
    <link rel="stylesheet" href="style.css" /> </head>
<body>
    <div class="container" style="max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
        <h2>Editar Comentário ID: <?php echo htmlspecialchars($comentario['id']); ?></h2>
        
        <form action="editar_comentario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($comentario['id']); ?>">
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($comentario['nome']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($comentario['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="comentario_texto">Comentário:</label>
                <textarea id="comentario_texto" name="comentario_texto" rows="5" required><?php echo htmlspecialchars($comentario['comentario_texto']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Edição</button>
            <a href="index.php#contato" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
<?php $conn->close(); ?>