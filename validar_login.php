<?php
// VERIFICAR SE ESTÁ VINDO INFORMAÇÕES
// PARA VALIDAÇÃO DE E-MAIL E SENHA
if ($_POST) {
    // VERIFICAR SE FOI ENVIADO OS CAMPOS OBRIGATÓRIOS
    if (empty($_POST["email"]) || empty($_POST["senha"])) {
        echo "
        <script>
            alert('Por favor, preencha todos os campos obrigatórios!');
            window.location='./tela_login.php';
        </script>
        ";
        exit;
    } else {
        include('conexao_mysqli.php');
        // RECUPERAR INFORMAÇÕES DO FORMULÁRIO LOGIN
        $email = trim($_POST["email"]);
        $senha = trim($_POST["senha"]);

        // MONTAR SINTAXE SQL PARA CONSULTAR NO BANCO DE DADOS
        $sql = "
        SELECT 
            pk_usuario , nome
        FROM 
            usuarios
        WHERE 
            email LIKE '$email'
            AND senha LIKE '$senha'
        ";

        $query = mysqli_query($conn, $sql);

        // VERIFICAR SE ENCONTROU ALGUM REGISTRO NA TABELA
        if(mysqli_num_rows($query) > 0) {

            // ORGANIZA OS DADOS DO BANCO COMO OBJETOS NA VARIÁVEL $ROW
            $row = mysqli_fetch_object($query);

            // CRIAR SESSÃO PARA VARIÁVEL GLOBAL
            session_start();

            // DECLARO VARIÁVEL GLOBAL INFORMANDO QUE USUÁRIO
            // ESTÁ AUTENTICADO CORRETAMENTE
            $_SESSION["autenticado"] = true;
            $_SESSION["pk_usuario"] = $row->pk_usuario;
            $_SESSION["nome_usuario"] = $row->nome;
            $_SESSION["tempo_login"] = time();

            header('Location: ./crud_mysqli');
            exit;
        } else {
            echo "
            <script>
                alert('E-mail e/ou senha inválidos!');
                window.location='./tela_login.php';
            </script>
            ";
            exit;        
        }

    }
} else {
    header('Location: ./tela_login.php');
    exit;
}
