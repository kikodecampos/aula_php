<?php

include("../verificar_autenticidade.php");

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
    if ($pk_cliente > 0) {
        $sql = "
        UPDATE clientes SET 
        nome = '$nome',
        cpf = '$cpf',
        whatsapp = '$whatsapp',
        email = '$email'
        WHERE pk_cliente = '$pk_cliente'
        ";
    } else {
        $sql = "
        INSERT INTO clientes (nome, cpf, whatsapp, email) VALUES
        ('$nome', '$cpf', '$whatsapp', '$email')
        ";
    }

    try {
        // ENVIAR A SINTAXE SQL AO MYSQL
        $query = mysqli_query($conn, $sql);
    } catch (Exception $e) {
        if (mysqli_errno($conn) == 1062) {
            $msg = "Campo CPF, E-mail e/ou Whatsapp já cadastrado.";
        }
        echo "
        <script>
            alert('$msg');
            window.location='./';
        </script>
        ";
        exit;
    }

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
