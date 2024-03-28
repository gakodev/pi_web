<?php

    class EstabelecimentoController {

        public static function cadastrarEstabelecimento($categoria, $nomeFantasia, $cnpj, $contato, $endereco) {
            include_once "../model/Estabelecimento.php";
            $model = new Estabelecimento (null, $categoria, $nomeFantasia, $cnpj, $contato, $endereco);
            $model->cadastrarEstabelecimento($model);
        }

        public static function listarEstabelecimento(){
            include_once "../model/Estabelecimento.php";
            $model = new Estabelecimento (null, null, null, null, null, null);
            return $model->listarEstabelecimento();

        }

        public static function resgataEstabelecimento($idEstabelecimento){
            include_once "../model/EstabelecimentoDao.php";
            $model = new Estabelecimento (null, null, null, null, null, null);
            return $model->resgataEstabelecimento($idEstabelecimento);

        }

        public static function alterarEstabelecimento ($idEstabelecimento, $categoria, $nomeFantasia, $cnpj, $contato, $endereco){
            include_once '../model/Cliente.php';
            $model = new Cliente ($idEstabelecimento, $categoria, $nomeFantasia, $cnpj, $contato, $endereco);
            $model->alterarEstabelecimento($model);
        }

        public static function excluirEstabelecimento ($idEstabelecimento) {
            include_once '../model/EstabelecimentoDao.php';
            $model = new Cliente (null, null, null, null, null, null);
            $model -> excluirEstabelecimento($idEstabelecimento);

        }



}



?>