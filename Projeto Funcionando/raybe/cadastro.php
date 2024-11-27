<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header>
        <div class="container-logo">
            <div class="logo-imagem">
                <img src="rayb2.png" alt="">
            </div>

            <div class="logo-texto">
                <h1>raybe</h1>
            </div>
        </div>
    </header>
               
    <form action="cadasatro2.php" method="POST"> <!-- Envia os dados para o script PHP -->
        <legend>Faça seu cadastro</legend>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="inputUser" required>            

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" required> 

        <label for="cpf">CPF</label>
        <input type="number" name="cpf" id="cpf" required> 

        <button type="submit" name="submit">Continuar</button> <!-- Botão de envio -->
    </form>

    <div class="rodape">
        <h4>Contatos: (61) 8144-6433</h4>
    </div>
</body>
</html>
