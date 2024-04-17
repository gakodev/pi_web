<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastroEstabelecimentoCss.css">
    <title>Home Page</title>
</head>

<body>

    <header>
        <div id="div_header">
            <img src='imgs/logonobg.png' alt=''>
            <ul id="ul_header">
                <li><a href="#">Seja nosso parceiro!</a></li>
                <li><a id="cadastro" href="#">Cadastrar</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div>
    </header>

    <div id = 'left'>
        <div id = 'lado1' class = " lados " ></div>
        <div id = 'lado2' class = " lados "></div>
    </div>

    <div id = 'right'>
        <h2>LADO DIREITO</h2>
    </div>

    <!--<div id='div_form'>
        <form id='formulario' method='post' action='../controller/processa.php'>
            <label for='categoria'>categoria:</label>
            <input class='entrada' type='text' name='categoria' value=".$categoria."><br>
            <label for='nomeFantasia'>nomeFantasia:</label>
            <input class='entrada' type='text' name='nomeFantasia' value=".$nomeFantasia."><br>
            <label for='cnpj'>cnpj:</label>
            <input class='entrada' type='text' name='cnpj' value=".$cnpj."><br>
            <label for='contato'>contato:</label>
            <input class='entrada' type='number' name='contato' value=".$contato."><br>
            <label for='endereco'>endereco:</label>
            <input class='entrada' type='text' name='endereco' value=".$endereco."><br>
            <input class='entrada' type='hidden' name='id' value='$idEstabelecimento'><br>
            <input class='entrada' type='hidden' name='op' value='$operacao'><br>
            <input class='entrada' class='butao' type='submit' value='$operacao'>
        </form>
    </div>
    -->

    <?php
    $idEstabelecimento = "";
    $categoria = "";
    $nomeFantasia = "";
    $cnpj = "";
    $contato = "";
    $endereco = "";
    $operacao = "cadastrarEstabelecimento";
    ?>

</body>

</html>