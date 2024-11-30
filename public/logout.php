<?php
// Inicia a sessão
session_start();

// Verifica se a sessão está ativa
if (isset($_SESSION)) {
    // Destroi todas as variáveis de sessão
    session_unset();

    // Destroi a sessão
    session_destroy();
}

// Redireciona o usuário para a página de login ou inicial
header("Location: login.php");
exit();
?>