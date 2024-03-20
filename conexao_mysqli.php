<?php
// CRIANDO CONSTANTES NO PHP
define('host', 'localhost'); // Caminho do banco (IP ou DNS)
define('user', 'root'); // Usuário
define('pass', ''); // Senha
define('dbname', 'ordem_servico'); // Nome do banco

$conn = mysqli_connect(host, user, pass, dbname); // Variável que vai conectar no banco

if ($conn) {
    // echo "Banco de dados conectado com sucesso!";
} else {
    echo "Falha ao conectar ao Banco de dados.";
    exit;
}

?>