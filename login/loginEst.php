<?php
session_start();

require_once '../dao/Conexao.php';
$conex = new Conexao();
$conex->fazConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cnpj = $_POST['cnpj'];
    $pw = $_POST['pw'];

    $stmt = $conex->conn->prepare('SELECT * FROM estabelecimento WHERE cnpj = ?');
    $stmt->execute([$cnpj]);
    $user = $stmt->fetch();

    if ($user) {
        $pw_hash = $user['pw'];
        if (password_verify($pw, $pw_hash)) {
            $_SESSION['idEstabelecimento'] = $user['idEstabelecimento'];
            $_SESSION['cnpj'] = $user['cnpj'];
            $_SESSION['loggedin'] = true; // Marca o usuário como logado
            
            header('Location: ../view/consulta-estabelecimento.php');
            exit();
        } else {
            $error = 'Senha incorreta';
        }
    } else {
        $error = 'Usuário não encontrado';
    }
    
    if (isset($error)) {
        echo '<script>alert("' . $error . '")</script>';
        echo '<script>location.href="../view/index.php"</script>';
        exit();
    }
}
?>