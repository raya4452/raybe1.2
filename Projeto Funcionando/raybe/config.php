<?php
$dbhost = 'localhost:3306'; // Defina apenas 'localhost', sem a porta
$dbusername = 'root'; // Seu nome de usuário do banco de dados
$dbpassword = ''; // Sua senha, provavelmente vazia para localhost
$dbname = 'clientes'; // Nome do banco de dados

// Criação da conexão usando a classe mysqli
$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

// Verifica se houve erro na conexão
if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
} else {
    echo "Conexão efetuada com sucesso!";
}

?>
