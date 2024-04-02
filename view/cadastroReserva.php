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
    if($operacao=="alterarReserva") {
        include "../controller/ReservaController.php";
        $res = ReservaController::resgataReserva($_REQUEST["idReserva"]);
        $qtd = $res->rowCount();
        $row = $res->fetch(PDO::FETCH_OBJ);
        $idReserva = $row->idReserva;
        $FK_idCliente = $row->FK_idCliente;
        $FK_idEstabelecimento = $row->FK_idEstabelecimento;
        $numConvidados = $row->numConvidados;
        $dataReserva = $row->dataReserva;
        $hora = $row->hora;
        $ambiente = $row->ambiente;
        $ocasiao = $row->ocasiao;
        $obs = $row->obs;
        $operacao = "alterarReserva";
    }   else {
        $idReserva = "";
        $FK_idCliente = "";
        $FK_idEstabelecimento = "";
        $numConvidados = "";
        $dataReserva = "";
        $hora = "";
        $ambiente = "";
        $ocasiao = "";
        $obs = "";
        $operacao = "cadastrarReserva";
    }
// $idReserva, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs
print "<div id='form_cliente'>";
print "<form id='formulario' method='post' action='../controller/processa.php'>";
print "<label for='FK_idCliente'>FK_idCliente:</label>";
print "<input class='entrada' type='text' name='FK_idCliente' value=".$FK_idCliente."><br>";
print "<label for='FK_idEstabelecimento'>FK_idEstabelecimento:</label>";
print "<input class='entrada' type='text' name='FK_idEstabelecimento' value =".$FK_idEstabelecimento."><br>";
print "<label for='numConvidados'>numConvidados:</label>";
print "<input class='entrada' type='text' name='numConvidados' value=".$numConvidados."><br>";
print "<label for='dataReserva'>dataReserva:</label>";
print "<input class='entrada' type='date' name='dataReserva' value=".$dataReserva."><br>";
print "<label for='hora'>hora:</label>";
print "<input class='entrada' type='time' name='hora' value=".$hora."><br>";
print "<label for='ambiente'>ambiente:</label>";
print "<input class='entrada' type='text' name='ambiente' value=".$ambiente."><br>";
print "<label for='ocasiao'>ocasiao:</label>";
print "<input class='entrada' type='text' name='ocasiao' value=".$ocasiao."><br>";
print "<label for='obs'>obs:</label>";
print "<input class='entrada' type='text' name='obs' value=".$obs."><br>";
print "<input class='entrada' type='hidden' name='id' value='$idReserva'><br>";
print "<input class='entrada' type='hidden' name='op' value='$operacao'><br>";
print "<input class='entrada' class='butao' type='submit' value = '$operacao'>";
print "</form>";
print "</div>";

?>


</body>
</html>