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
            $_SESSION['idCliente'] = $user['idCliente'];
            $_SESSION['email'] = $user['email'];
        
            header('Location: ../view/index.php');
            echo '<script>alert("Logou!")</script>';
            exit();
        } else {
            $error = 'Senha incorreta';
            
        }
    } else {
        $error = 'Usuário não encontrado';
    }
}

if (isset($error)) {
    echo '<script>alert("' . $error . '")</script>';
    echo '<script>location.href="../view/index.php"</script>';
}
?>