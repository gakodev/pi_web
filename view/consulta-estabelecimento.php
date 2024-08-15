<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "<script>alert('Faça login!')</script>";
    header("Location: ../view/index.php");
    exit;
}

include_once '../dao/Conexao.php';
$conex = new Conexao();
$conex->fazConexao();

$idEstabelecimento = $_SESSION['idEstabelecimento'];
$dataReservaFiltro = isset($_GET['dataReservaFiltro']) ? $_GET['dataReservaFiltro'] : '';

$sql = "SELECT c.nome AS cliente, r.numConvidados, r.dataReserva, r.hora, r.ambiente, r.ocasiao, r.obs 
        FROM reserva r 
        JOIN cliente c ON r.FK_idCliente = c.idCliente
        WHERE r.FK_idEstabelecimento = :idEstabelecimento";

if (!empty($dataReservaFiltro)) {
    $sql .= " AND r.dataReserva = :dataReservaFiltro";
}

$stmt = $conex->conn->prepare($sql);
$stmt->bindParam(':idEstabelecimento', $idEstabelecimento);

if (!empty($dataReservaFiltro)) {
    $stmt->bindParam(':dataReservaFiltro', $dataReservaFiltro);
}

$stmt->execute();
$result = $stmt;
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <nav>
      <img src='imgs/logonobg_laranja.png' alt=''>
      <ul id="ul_header">
        <li><a id="logout" href="../login/logoutEst.php">Sair</a></li>
      </ul>
    </nav>
  </header>

    <div id="card-table">
        <div id="div-title">
            <h2>Suas reservas: </h2>
            <form method="GET" action="">
                <label id="label-filtro" for="dataReservaFiltro">Filtrar por dataReserva:</label>
                <input class="input-filtro" type="date" id="dataReservaFiltro" name="dataReservaFiltro" value="<?php echo htmlspecialchars($dataReservaFiltro); ?>">
                <input id="button-filtro" class="input-filtro" type="submit" value="Filtrar">
            </form>
        </div>
        
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Número de convidados</th>
                        <th>dataReserva</th>
                        <th>Hora</th>
                        <th>Ambiente</th>
                        <th>Ocasião</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result && $result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row["cliente"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["numConvidados"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["dataReserva"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["hora"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["ambiente"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["ocasiao"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["obs"]) . "</td>";
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