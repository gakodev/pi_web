<?php

    class EstabelecimentoDao {

        public function cadastrarEstabelecimento(Estabelecimento $estabelecimento) {
            include_once 'conexao.php';
    
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "INSERT INTO estabelecimento (pw, categoria, nomeFantasia, cnpj, contato, endereco)
                VALUES (:pw, :categoria, :nomeFantasia, :cnpj, :contato, :endereco)";
                
            $stmt = $conex->conn->prepare($sql);
    
            $stmt->bindValue(':pw', $estabelecimento->getPw());
            $stmt->bindValue(':categoria', $estabelecimento->getCategoria());
            $stmt->bindValue(':nomeFantasia', $estabelecimento->getNomeFantasia());
            $stmt->bindValue(':cnpj', $estabelecimento->getCnpj());
            $stmt->bindValue(':contato', $estabelecimento->getContato());
            $stmt->bindValue(':endereco', $estabelecimento->getEndereco());
        
                $res = $stmt->execute();
    
                if ($res) {
                    echo '<script>alert("Cadastro realizado!")</script>';
            } else {
                echo '<script>alert("Erro!")</script>';
            }
            echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
            // ALTERAR ESSA LINHA !!!
        }

        public function listarEstabelecimento() { 
            include_once 'conexao.php';
    
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = 'SELECT * FROM estabelecimento ORDER BY idEstabelecimento';
            return $conex->conn->query($sql);  
        }
    
         public function resgataEstabelecimento($idEstabelecimento){
            include_once 'conexao.php';
            
            $conex = new Conexao();
            $conex->fazConexao();
            $sql = "SELECT * FROM estabelecimento WHERE idEstabelecimento = '$idEstabelecimento'";
            return $conex->conn->query($sql);
        }

        public function alterarEstabelecimento(Estabelecimento $estabelecimento){
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

        public function excluirEstabelecimento($idEstabelecimento){
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