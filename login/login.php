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

    if ($user) {
        $pw_hash = $user['pw'];
        if (password_verify($pw, $pw_hash)) {
            // Definindo variáveis de sessão
            $_SESSION['idCliente'] = $user['idCliente'];
            $_SESSION['email'] = $user['email'];
            
            // Redirecionar após login bem-sucedido
            header('Location: ../view/index.php');
            exit();
        } else {
            // Senha incorreta
            $_SESSION['login_error'] = 'Senha incorreta';
            header('Location: ../view/index.php');
            exit();
        }
    } else {
        // Usuário não encontrado
        $_SESSION['login_error'] = 'Usuário não encontrado';
        header('Location: ../view/index.php');
        exit();
    }
}
?>