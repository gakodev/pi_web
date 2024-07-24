<?php

class clienteDao
{
    public function cadastrarCliente(Cliente $cliente)
{
    session_start();
    include_once 'conexao.php';
    $conex = new Conexao();
    $conex->fazConexao();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $pw_confirm = $_POST['pw-confirm'];
        $cpf = $_POST['cpf'];

        if ($pw !== $pw_confirm) {
            $error = 'As senhas não coincidem.';
        } else {

            $stmtEmail = $conex->conn->prepare("SELECT * FROM cliente WHERE email = ?");
            $stmtEmail->execute([$email]);
            if ($stmtEmail->fetch()) {
                $error = 'Email já cadastrado.';
            }
            
            $stmtCpf = $conex->conn->prepare("SELECT * FROM cliente WHERE cpf = ?");
            $stmtCpf->execute([$cpf]);
            if ($stmtCpf->fetch()) {
                $error = 'CPF já cadastrado.';
            }

            if (!isset($error)) {
                $hashed_pw = password_hash($pw, PASSWORD_BCRYPT);
                $sql = "INSERT INTO cliente (pw, nome, cpf, dataNascimento, numCelular, email)
                        VALUES (:pw, :nome, :cpf, :dataNascimento, :numCelular, :email)";

                $stmtInsert = $conex->conn->prepare($sql);
                $stmtInsert->bindValue(':pw', $hashed_pw);
                $stmtInsert->bindValue(':nome', $cliente->getNome());
                $stmtInsert->bindValue(':cpf', $cliente->getCpf());
                $stmtInsert->bindValue(':dataNascimento', $cliente->getDataNascimento());
                $stmtInsert->bindValue(':numCelular', $cliente->getNumCelular());
                $stmtInsert->bindValue(':email', $cliente->getEmail());

                if ($stmtInsert->execute()) {
                    echo '<script>alert("Cadastro realizado!")</script>';
                    echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
                    return;
                } else {
                    $error = 'Erro ao registrar o usuário.';
                }
            }
        }
    }

    if (isset($error)) {
        echo '<script>alert("' . $error . '")</script>';
        echo '<script>location.href="../view/index.php"</script>';
    }
}

    public function listarClientes()
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = 'SELECT * FROM cliente ORDER BY idCliente';
        return $conex->conn->query($sql);
    }

    public function resgataCliente($idCliente)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente WHERE idCliente = '$idCliente'";
        return $conex->conn->query($sql);
    }

    public function alterarCliente(Cliente $cliente)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE cliente SET nome, cpf, dataNascimento, numCelular, email
            WHERE id = :id";

        $stmt = $conex->conn->prepare($sql);

        $stmt->bindValue(':id', $cliente->getIdCliente());
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue('dataNascimento', $cliente->getdataNascimento());
        $stmt->bindValue('numCelular', $cliente->getNumCelular());
        $stmt->bindValue('email', $cliente->getEmail());

        $res = $stmt->execute();

        if ($res) {
            echo '<script>alert("Alteração concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
        // ALTERAR ESSA LINHA !!!
    }

    public function excluirCliente($idCliente)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cliente WHERE idCliente = '$idCliente'";

        $res = $conex->conn->query($sql);

        if ($res) {
            echo '<script>alert("Exclusão concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
        // ALTERAR ESSA LINHA !!!
    }

}






?>