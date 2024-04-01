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

$id = '';
$nome = '';
$cpf = '';
$dataNascimento = '';
$numCelular = '';
$email = '';
$operacao = 'alterarCliente';

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
print "<input class='entrada' type='hidden' name='id' value='$id'><br>";
print "<input class='entrada' type='hidden' name='op' value='$operacao'><br>";
print "<input class='entrada' class='butao' type='submit' value = '$operacao'>";
print "</form>";
print "</div>";

?>


</body>
</html>