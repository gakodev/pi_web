<?php

    class clienteDao {
    public function cadastrarCliente(Cliente $cliente) {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO cliente (pw, nome, cpf, dataNascimento, numCelular, email)
            VALUES (:pw, :nome, :cpf, :dataNascimento, :numCelular, :email)";
            
        $stmt = $conex->conn->prepare($sql);

        $stmt->bindValue(':pw', $cliente->getPw());
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':dataNascimento', $cliente->getdataNascimento() );
        $stmt->bindValue(':numCelular', $cliente->getNumCelular());
        $stmt->bindValue(':email', $cliente->getEmail());
    
            $res = $stmt->execute();

            if ($res) {
                echo '<script>alert("Cadastro realizado!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
    }

    public function listarClientes() { 
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = 'SELECT * FROM cliente ORDER BY idCliente';
        return $conex->conn->query($sql);  
    }

     public function resgataCliente($idCliente){
        include_once 'conexao.php';
        
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente WHERE idCliente = '$idCliente'";
        return $conex->conn->query($sql);
    }

    public function alterarCliente(Cliente $cliente){
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

    public function excluirCliente($idCliente){
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