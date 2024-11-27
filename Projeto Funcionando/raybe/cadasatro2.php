<?php
// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {

    // Exibe os dados do formulário
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Idade: ' . $_POST['idade']);
    print_r('<br>');
    print_r('CPF: ' . $_POST['cpf']);
    print_r('<br>');

    // Conexão com o banco de dados
    $conexao = new mysqli("localhost", "root", "", "clientes");

    // Verifica se houve erro na conexão
    if ($conexao->connect_errno) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $data_do_cadastro = date('Y-m-d H:i:s'); // Data atual do cadastro

    // Usando prepared statements para evitar SQL Injection
    $sql = "INSERT INTO clientes (nome, idade, cpf, data_do_cadastro) 
            VALUES (?, ?, ?, ?)";

    // Prepara a consulta
    if ($stmt = $conexao->prepare($sql)) {
        // Bind os parâmetros para a consulta (s = string, i = inteiro)
        $stmt->bind_param("siss", $nome, $idade, $cpf, $data_do_cadastro);

        // Executa a consulta
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }

        // Fecha a declaração
        $stmt->close();
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
