<?php

// VERIFICA SE ESTÁ VINDO DADOS VIA POST
if ($_POST) {
    // PEGAR INFORMAÇÕES VINDAS DO FORMULÁRIO
    $pk_cliente = trim($_POST['pk_cliente']);
    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $whatsapp = trim($_POST['whatsapp']);
    $email = trim($_POST['email']);

    // VALIDAR DADOS OBRIGATÓRIOS
    if (empty($nome) || empty($cpf) || strlen($cpf) != 14 || empty($email)) {
        echo "
        <script>
            alert('Falha na validação do formulário!');
            window.location='./';
        </script>
        ";
        exit;
    }

    // ARQUIVO DE CONEXÃO AO BANCO DE DADOS
    include('../conexao_mysqli.php');

    // MONTAR A SINTAXE SQL QUE O PHP VAI ENVIAR AO MYSQL
    $sql = "
    INSERT INTO clientes (nome, cpf, whatsapp, email) VALUES
    ('$nome', '$cpf', '$whatsapp', '$email')
    ";

    // ENVIAR A SINTAXE SQL AO MYSQL
    $query = mysqli_query($conn, $sql);

    // VERIFICA SE CADASTROU CORRETAMENTE
    if ($query) {
        $msg = "Registro salvo com sucesso!";
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }

    echo "
    <script>
        alert('$msg');
        window.location='./';
    </script>
    ";
    exit;
} else {
    // REDIRECIONA O USUÁRIO PARA A PÁGINA PRINCIPAL
    // DO DIRETÓRIO
    header("Location: ./");
    exit;
}
