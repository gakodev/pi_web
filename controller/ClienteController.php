<?php

    class ClienteController {

        public static function cadastrarCliente ($nome, $cpf, $dataNascimento, $numCelular, $email) {
            include_once "../model/Cliente.php";
            $model = new Cliente (null, $nome, $cpf, $dataNascimento, $numCelular, $email);
            $model->cadastrarCliente($model);
        }

        public static function listarClientes(){
            include_once "../model/Cliente.php";
            $model = new Cliente(null, null, null, null, null, null);
            return $model->listarClientes();
        }

        public static function resgataCliente($idCliente){
            include_once "../model/Cliente.php";
            $model = new Cliente (null, null, null, null, null, null);
            return $model->resgataCliente($idCliente);

        }

        public static function alterarCliente ($idCliente, $nome, $cpf, $dataNascimento, $numCelular, $email){
            include_once '../model/Cliente.php';
            $model = new Cliente ($idCliente, $nome, $cpf, $dataNascimento, $numCelular, $email);
            $model->alterarCliente($model);
        }

        public static function excluirCliente ($idCliente) {
            include_once '../model/Cliente.php';
            $model = new Cliente (null, null, null, null, null, null);
            $model -> excluirCliente($idCliente);

        }
    }





?>