<?php
session_start();

require_once '../dao/Conexao.php';
$conex = new Conexao();
$conex->fazConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $stmt = $sql->prepare('SELECT * FROM cliente WHERE email = :email');
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if(!$user || !password_verify($pw, $email['password_hash'])){
        die('Informações incorretas');
    }

    $_SESSION['idCliente'] = $user['idCliente'];
    $_SESSION['nome'] = $user['nome'];

    header("Location: index.php");
    exit;


}
?>