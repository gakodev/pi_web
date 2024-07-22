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
    $pw_hashed = $user['pw'];
    echo 'email: '.$user['email'];  
    echo ' senha: '.$user['pw']; 
    echo ' pw :  '.$pw;
    echo "<script>console.log('cafralho');</script>";

    if(password_verify($pw, $pw_hashed)){
        $_SESSION['idCliente'] = $user['idCliente'];
        $_SESSION['email'] = $user['email'];
        echo 'if';
        echo "<script>alert'logou';</script>";
        header('Location: ../view/cadastro-estabelecimento.html');
        exit();
    } else {
        echo 'else';
        $error = 'Nome de usuário ou senha inválidos';
    }
}
?>