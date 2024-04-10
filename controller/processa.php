<?php

switch ($_REQUEST["op"]){
    // OPCOES CLIENTE
    case "cadastrarCliente":
        cadastrarCliente();break;
    case "alterarCliente":
        alterarCliente();break;
    case "excluirCliente":
        excluirCliente();break;
    case "listarCliente":
        listarCliente();break;
    // OPCOES ESTABELECIMENTO
    case "cadastrarEstabelecimento":
        cadastrarEstabelecimento();break;
    case "alterarEstabelecimento":
        alterarEstabelecimento();break;
    case "excluirEstabelecimento":
        excluirEstabelecimento();break;
    case "listarEstabelecimento":
        listarEstabelecimento();break;
    //OPCOES RESERVA
    case "cadastrarReserva":
        cadastrarReserva();break;
    case "alterarReserva":
        alterarReserva();break;
    case "excluirReserva":
        excluirReserva();break;
    case "listarReserva":
        listarReserva();break;
    default:
        echo "Não encontrou a chave";

    // funções do cliente;
    }
function cadastrarCliente (){
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $numCelular = $_POST["numCelular"];
    $email = $_POST["email"];
   
    include_once 'ClienteController.php';
    $cntrl = new ClienteController();
    $cntrl->cadastrarCliente($nome, $cpf, $dataNascimento, $numCelular, $email);
}
function alterarCliente () {
    $idCliente = $_POST ["idCliente"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["dataNascimento"];
    $numCelular = $_POST["numCelular"];
    $email = $_POST["email"];
    
    include_once 'ClienteController.php';
    $cntrl = new ClienteController();
    $cntrl->alterarCliente($idCliente, $nome, $cpf, $dataNascimento, $numCelular, $email);
}
function excluirCliente (){
    $idCliente = $_REQUEST["idCliente"];
    include_once 'ClienteController.php';
    $cntrl = new ClienteController();
    $cntrl->excluirCliente($idCliente);
}
function listarCliente () {
    echo '<script>location.href="../view/cadastroCliente.php"</script>';
}

    // funções do estabelecimento;

function cadastrarEstabelecimento (){
    $categoria = $_POST["categoria"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $cnpj = $_POST["cnpj"];
    $contato = $_POST["contato"];
    $endereco = $_POST["endereco"];
   
    include_once 'EstabelecimentoController.php';
    $cntrl = new EstabelecimentoController();
    $cntrl->cadastrarEstabelecimento($categoria, $nomeFantasia, $cnpj, $contato, $endereco);
}
function alterarEstabelecimento () {
    $idEstabelecimento = $_POST ["idEstabelecimento"];
    $categoria = $_POST["categoria"];
    $nomeFantasia = $_POST["nomeFantasia"];
    $cnpj = $_POST["cnpj"];
    $contato = $_POST["contato"];
    $endereco = $_POST["endereco"];
    
    include_once 'EstabelecimentoController.php';
    $cntrl = new EstabelecimentoController();
    $cntrl->alterarEstabelecimento($idEstabelecimento, $categoria, $nomeFantasia, $cnpj, $contato, $endereco);
}
function excluirEstabelecimento (){
    $idEstabelecimento = $_REQUEST["idEstabelecimento"];
    include_once 'EstabelecimentoController.php';
    $cntrl = new EstabelecimentoController();
    $cntrl->excluirEstabelecimento($idEstabelecimento);
}
function listarEstabelecimento () {
    include '../view/listarClientes.php';
}

    // funções da reserva;

function cadastrarReserva (){
    $FK_idCliente = $_POST["FK_idCliente"];
    $FK_idEstabelecimento = $_POST["FK_idEstabelecimento"];
    $numConvidados = $_POST["numConvidados"];
    $dataReserva = $_POST["dataReserva"];
    $hora = $_POST["hora"];
    $ambiente = $_POST["ambiente"];
    $ocasiao = $_POST["ocasiao"];
    $obs = $_POST["obs"];

    include_once 'ReservaController.php';
    $cntrl = new ReservaController();
    $cntrl->cadastrarReserva($FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs);
}
function alterarReserva () {
    $idReserva = $_POST ["idReserva"];
    $FK_idCliente = $_POST["FK_idCliente"];
    $FK_idEstabelecimento = $_POST["FK_idEstabelecimento"];
    $numConvidados = $_POST["numConvidados"];
    $dataReserva = $_POST["dataReserva"];
    $hora = $_POST["hora"];
    $ambiente = $_POST["ambiente"];
    $ocasiao = $_POST["ocasiao"];
    $obs = $_POST["obs"];
    
    include_once 'ReservaController.php';
    $cntrl = new ReservaController();
    $cntrl->alterarReserva($idReserva, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs);
}
function excluirReserva (){
    $idReserva = $_REQUEST["idReserva"];
    include_once 'ReservaController.php';
    $cntrl = new ReservaController();
    $cntrl->excluirReserva($idReserva);
}
function listarReserva () {
    include '../view/listarClientes.php';
    // MUDAR O CAMINHO
}






?>