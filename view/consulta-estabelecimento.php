<?php
include_once '../dao/conexao.php';
$conex = new Conexao();
$conex->fazConexao();

$sql = "SELECT c.nome AS cliente, r.numConvidados, r.data, r.hora, r.ambiente, r.ocasiao, r.obs 
        FROM reserva r 
        JOIN cliente c ON r.FK_idCliente = c.idCliente";

$result = $conex->conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Pagina do estabelecimento</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='consulta-estabelecimentoCss.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
</head>

<body>
    <div id="card-table">
    <div id="div-title">
<h2>Suas reservas: </h2>
    </div>
<div class="table-wrapper">
    <table class="fl-table">
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Número de convidados</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Ambiente</th>
            <th>Ocasião</th>
            <th>Observações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result && $result->rowCount() > 0) {
            // Exibe os dados de cada linha
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["cliente"] . "</td>";
                echo "<td>" . $row["numConvidados"] . "</td>";
                echo "<td>" . $row["data"] . "</td>";
                echo "<td>" . $row["hora"] . "</td>";
                echo "<td>" . $row["ambiente"] . "</td>";
                echo "<td>" . $row["ocasiao"] . "</td>";
                echo "<td>" . $row["obs"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum resultado encontrado</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
</body>

</html>