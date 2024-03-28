<?php
// INICIAR SESSÃO PARA TER ACESSO A VARIÁVEIS GLOBAIS
session_start();

// VERIFICA SE O USUÁRIO NÃO ESTÁ CONECTADO
if ($_SESSION["autenticado"] != true) {
    // DESTRUIR QUALQUER SESSÃO EXISTENTE
    session_destroy();

    header("Location: ../tela_login.php");
    exit;
} else {

    $tempo_limite = 300; // SEGUNDOS
    $tempo_atual = time();

    // VERIFICAR TEMPO INATIVO DO USUÁRIO
    if (($tempo_atual - $_SESSION["tempo_login"]) > $tempo_limite) {
        // DESTRUIR QUALQUER SESSÃO EXISTENTE
        session_destroy();

        echo "
        <script>
            alert('Tempo de sessão esgotado!');
            window.location='../tela_login.php';
        </script>
        ";
        exit;
    } else {
        $_SESSION["tempo_login"] = time();
    }
}
