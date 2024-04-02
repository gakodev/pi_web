<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homePageEstilo.css">
    <title>Home Page</title>
</head>
<body>

<header>
    <div id="div_header">
        <h1 id="logo"><img src="" alt=""></h1>
        <ul id="ul_header">
        <li><a href="#">Seja nosso parceiro!</a></li>
        <li><a href="#">Cadastrar</a></li>
        <li><a href="#">Entrar</a></li>
        </ul>
    </div>
</header>

<?php

$operacao = $_REQUEST["op"];
    if($operacao=="alterarEstabelecimento") {
        include "../controller/EstabelecimentoController.php";
        $res = EstabelecimentoController::resgataEstabelecimento($_REQUEST["idEstabelecimento"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);
        $idEstabelecimento = $row->idEstabelecimento;
        $categoria = $row->categoria;
        $nomeFantasia = $row->nomeFantasia;
        $cnpj = $row->cnpj;
        $contato = $row->contato;
        $endereco = $row->endereco;
        $operacao = "alterarEstabelecimento";
    }   else {
        $idEstabelecimento = "";
        $categoria = "";
        $nomeFantasia = "";
        $cnpj = "";
        $contato = "";
        $endereco = "";
        $operacao = "cadastrarEstabelecimento";
    }

print "<div id='form_cliente'>";
print "<form id='formulario' method='post' action='../controller/processa.php'>";
print "<label for='categoria'>categoria:</label>";
print "<input class='entrada' type='text' name='categoria' value=".$categoria."><br>";
print "<label for='nomeFantasia'>nomeFantasia:</label>";
print "<input class='entrada' type='text' name='nomeFantasia' value =".$nomeFantasia."><br>";
print "<label for='cnpj'>cnpj:</label>";
print "<input class='entrada' type='text' name='cnpj' value=".$cnpj."><br>";
print "<label for='contato'>contato:</label>";
print "<input class='entrada' type='number' name='contato' value=".$contato."><br>";
print "<label for='endereco'>endereco:</label>";
print "<input class='entrada' type='text' name='endereco' value=".$endereco."><br>";
print "<input class='entrada' type='hidden' name='id' value='$idEstabelecimento'><br>";
print "<input class='entrada' type='hidden' name='op' value='$operacao'><br>";
print "<input class='entrada' class='butao' type='submit' value = '$operacao'>";
print "</form>";
print "</div>";

?>


</body>
</html>