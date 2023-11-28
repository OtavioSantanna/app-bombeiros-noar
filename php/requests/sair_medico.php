<?php
// Inicia a sessão (se ainda não estiver iniciada)
session_start();

// Destroi todas as variáveis de sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a página de login ou outra página desejada
header("Location: ../../pages/medico/login.html");
exit(); // Certifique-se de parar a execução após o redirecionamento
?>
