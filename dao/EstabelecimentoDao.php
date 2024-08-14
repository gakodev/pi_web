<?php

class EstabelecimentoDao
{

    public function cadastrarEstabelecimento(Estabelecimento $estabelecimento)
    {
        session_start();
        include_once 'conexao.php';
        $conex = new Conexao();
        $conex->fazConexao();
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cnpj = $_POST['cnpj'];
            $pw = $_POST['pw'];
            $pw_confirm = $_POST['pw-confirm'];
    
            if ($pw !== $pw_confirm) {
                $error = 'As senhas não coincidem.';
            } else {
                $stmtCnpj = $conex->conn->prepare("SELECT * FROM estabelecimento WHERE cnpj = ?");
                $stmtCnpj->execute([$cnpj]);
                if ($stmtCnpj->fetch()) {
                    $error = 'CNPJ já cadastrado.';
                }
    
                if (!isset($error)) {
                    $hashed_pw = password_hash($pw, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO estabelecimento (pw, categoria, nomeFantasia, cnpj, contato, endereco)
                            VALUES (:pw, :categoria, :nomeFantasia, :cnpj, :contato, :endereco)";
    
                    $stmtInsert = $conex->conn->prepare($sql);
                    $stmtInsert->bindValue(':pw', $hashed_pw);
                    $stmtInsert->bindValue(':categoria', $estabelecimento->getCategoria());
                    $stmtInsert->bindValue(':nomeFantasia', $estabelecimento->getNomeFantasia());
                    $stmtInsert->bindValue(':cnpj', $estabelecimento->getCnpj());
                    $stmtInsert->bindValue(':contato', $estabelecimento->getContato());
                    $stmtInsert->bindValue(':endereco', $estabelecimento->getEndereco());
    
                    if ($stmtInsert->execute()) {
                        echo '<script>alert("Cadastro realizado!")</script>';
                        echo '<script>location.href="../controller/processa.php?op=listarEstabelecimento"</script>';
                        return;
                    } else {
                        $error = 'Erro ao registrar o usuário.';
                    }
                }
            }
        }
    
        if (isset($error)) {
            echo '<script>alert("' . $error . '")</script>';
            echo '<script>location.href="../view/pagina-do-estabelecimento.php"</script>';
        }
    }

    public function listarEstabelecimento()
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = 'SELECT * FROM estabelecimento ORDER BY idEstabelecimento';
        return $conex->conn->query($sql);
    }

    public function resgataEstabelecimento($idEstabelecimento)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM estabelecimento WHERE idEstabelecimento = '$idEstabelecimento'";
        return $conex->conn->query($sql);
    }

    public function alterarEstabelecimento(Estabelecimento $estabelecimento)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE estabelecimento SET categoria, nomeFantasia, cnpj, contato, endereco
                WHERE id = :idEstabelecimento";

        $stmt = $conex->conn->prepare($sql);

        $stmt->bindValue(':idEstabelecimento', $estabelecimento->getIdEstabelecimento());
        $stmt->bindValue(':categoria', $estabelecimento->getCategoria());
        $stmt->bindValue(':nomeFantasia', $estabelecimento->getNomeFantasia());
        $stmt->bindValue('cnpj', $estabelecimento->getCnpj());
        $stmt->bindValue('contato', $estabelecimento->getContato());
        $stmt->bindValue('endereco', $estabelecimento->getEndereco());

        $res = $stmt->execute();

        if ($res) {
            echo '<script>alert("Alteração concluída!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
        // ALTERAR ESSA LINHA !!!
    }

    public function excluirEstabelecimento($idEstabelecimento)
    {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM estabelecimento WHERE id = '$idEstabelecimento'";

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