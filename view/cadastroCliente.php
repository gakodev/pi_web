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

<div id= "imagens">
    <img class= "classeImgs" src="imgs/restaurante.jpg" alt="">
    <img class= "classeImgs" src="imgs/bar.jpg" alt="">
    <img class= "classeImgs" src="imgs/drinkeria.jpg" alt="">
</div>


<?php

$operacao = $_REQUEST["op"];
    if($operacao=="alterarCliente") {
        include "../controller/ClienteController.php";
        $res = ClienteController::resgataCliente($_REQUEST["idCliente"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);
        $idCliente = $row->idCliente;
        $nome = $row->nome;
        $cpf = $row->cpf;
        $cnpj = $row->cnpj;
        $dataNascimento = $row->dataNascimento;
        $numCelular = $row->numCelular;
        $email = $row->email;
        $operacao = "alterarCliente";
    }   else {
        $idCliente = "";
        $nome = "";
        $cpf = "";
        $dataNascimento = "";
        $numCelular = "";
        $email = "";
        $operacao = "cadastrarCliente";
    }
    
print "<div id='form_cliente'>";
print "<form id='formulario' method='post' action='../controller/processa.php'>";
print "<label for='nome'>nome:</label>";
print "<input class='entrada' type='text' name='nome' value=".$nome."><br>";
print "<label for='cpf'>cpf:</label>";
print "<input class='entrada' type='text' name='cpf' value =".$cpf."><br>";
print "<label for='dataNascimento'>data de nascimento:</label>";
print "<input class='entrada' type='text' name='dataNascimento' value=".$dataNascimento."><br>";
print "<label for='numCelular'>NÚMERO DE CONTATO:</label>";
print "<input class='entrada' type='number' name='numCelular' value=".$numCelular."><br>";
print "<label for='email'>E-MAIL:</label>";
print "<input class='entrada' type='text' name='email' value=".$email."><br>";
print "<input class='entrada' type='hidden' name='id' value='$idCliente'><br>";
print "<input class='entrada' type='hidden' name='op' value='$operacao'><br>";
print "<input class='entrada' class='butao' type='submit' value = '$operacao'>";
print "</form>";
print "</div>";

?>


</body>
</html>