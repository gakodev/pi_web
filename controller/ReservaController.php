<?php
    class ReservaController {

        public static function cadastrarReserva ($FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs) {
            include_once "../model/Reserva.php";
            $model = new Reserva (null, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs);
            $model->cadastrarReserva($model);
        }

        public static function listarReserva(){
            include_once "../model/Reserva.php";
            $model = new Reserva(null, null, null, null, null, null, null, null, null);
            return $model->listarReserva();
        }

        public static function resgataReserva($idReserva){
            include_once "../model/Reserva.php";
            $model = new Reserva (null, null, null, null, null, null, null, null, null);
            return $model->resgataReserva($idReserva);

        }

        public static function alterarReserva ($idReserva, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs){
            include_once '../model/Reserva.php';
            $model = new Reserva ($idReserva, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $dataReserva, $hora, $ambiente, $ocasiao, $obs);
            $model->alterarReserva($model);
        }

        public static function excluirReserva ($idReserva) {
            include_once '../model/Reserva.php';
            $model = new Reserva (null, null, null, null, null, null, null, null, null);
            $model -> excluirReserva($idReserva);

        }
    }
?>