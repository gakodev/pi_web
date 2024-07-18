<?php
session_start();

require_once '../dao/Conexao.php';
$conex = new Conexao();
$conex->fazConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $stmt = $conex->conn->prepare('SELECT * FROM cliente WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if($user && password_verify($pw, $user['pw'])){
        $_SESSION['idCliente'] = $user['idCliente'];
        $_SESSION['email'] = $user['email'];
        header('Location: ../index.php');
        exit();
    } else {
        $error = 'Nome de usuário ou senha inválidos';
    }
}
?>