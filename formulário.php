<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "15481920";
$dbname = "crud_imagens";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dados do formulário
    $descricao = $_POST['descricao'];
    $imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    $imagem = $conn->real_escape_string($imagem);

    // Prepara e executa a inserção no banco de dados
    $sql = "INSERT INTO imagens (nome, imagem, descricao) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $_FILES['imagem']['name'], $imagem, $descricao);
    $stmt->execute();

     // Verifica se a inserção foi bem-sucedida e exibe mensagem
    if ($stmt->affected_rows > 0) {
        echo "Imagem inserida com sucesso!";
    } else {
        echo "Erro ao inserir imagem: " . $stmt->error;
    }
}

$conn->close();
?>
