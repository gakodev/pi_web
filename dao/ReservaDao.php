<?php

    class ReservaDao {
    public function cadastrarReserva(Reserva $reserva) {
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "INSERT INTO reserva (FK_idCliente, FK_estabelicimento, numConvidados, dataReserva, hora, ambiente, ocasiao, obs)
            VALUES (:FK_idCliente, :FK_estabelicimento, :numConvidados, :dataReserva, :hora, :ambiente, :ocasiao, :obs)";
            
        $stmt = $conex->conn->prepare($sql);

        $stmt->bindValue(':FK_idCliente', $reserva->getFKIdCliente());
        $stmt->bindValue(':FK_estabelicimento', $reserva->getFKIdEstabelecimento());
        $stmt->bindValue(':numConvidados', $reserva->getNumConvidados() );
        $stmt->bindValue(':dataReserva', $reserva->getDataReserva());
        $stmt->bindValue(':hora', $reserva->getHora());
        $stmt->bindValue(':ambiente', $reserva->getAmbiente());
        $stmt->bindValue(':ocasiao', $reserva->getOcasiao());
        $stmt->bindValue(':obs', $reserva->getObs());
    
            $res = $stmt->execute();

            if ($res) {
                echo '<script>alert("Cadastro realizado!")</script>';
        } else {
            echo '<script>alert("Erro!")</script>';
        }
        echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
        // ALTERAR ESSA LINHA !!!
    }

    public function listarReserva() { 
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = 'SELECT * FROM reserva ORDER BY idReserva';
        return $conex->conn->query($sql);  
    }

     public function resgataReserva($idReserva){
        include_once 'conexao.php';
        
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM reserva WHERE idReserva = '$idReserva'";
        return $conex->conn->query($sql);
    }

    public function alterarReserva(Reserva $reserva){
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE reserva SET FK_idCliente, FK_estabelicimento, numConvidados, dataReserva, hora, ambiente, ocasiao, obs
            WHERE id = :idReserva";

            $stmt = $conex->conn->prepare($sql);

        $stmt->bindValue(':idReserva', $reserva->getIdReserva());
        $stmt->bindValue(':FK_idCliente', $reserva->getFKIdCliente());
        $stmt->bindValue(':FK_estabelicimento', $reserva->getFKIdEstabelecimento());
        $stmt->bindValue(':numConvidados', $reserva->getNumConvidados() );
        $stmt->bindValue(':dataReserva', $reserva->getDataReserva());
        $stmt->bindValue(':hora', $reserva->getHora());
        $stmt->bindValue(':ambiente', $reserva->getAmbiente());
        $stmt->bindValue(':ocasiao', $reserva->getOcasiao());
        $stmt->bindValue(':obs', $reserva->getObs());
        
            $res = $stmt->execute();

            if ($res) {
                echo '<script>alert("Alteração concluída!")</script>';
    } else {
        echo '<script>alert("Erro!")</script>';
    }
    echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
    // ALTERAR ESSA LINHA !!!
    }

    public function excluirReserva($idReserva){
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM reserva WHERE idReserva = '$idReserva'";

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