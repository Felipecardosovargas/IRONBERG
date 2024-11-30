<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    // Consultando o banco de dados para o usuário
    $sql = "SELECT * FROM usuarios WHERE username = '$loginUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado
        $user = $result->fetch_assoc();

        // Verificando a senha
        if (password_verify($loginPassword, $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $loginUsername;
            echo "Login bem-sucedido!";
            // Redireciona para a página inicial ou página protegida
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

// Fechando a conexão
$conn->close();
?>

<form method="POST">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Login</button>
</form>
