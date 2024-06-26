<?php

    class Estabelecimento{

        private $pw;
        private $idEstabelecimento;
        private $categoria;
        private $nomeFantasia;
        private $cnpj;
        private $contato;
        private $endereco;
        
    // Construtor
    public function __construct($pw, $idEstabelecimento, $categoria, $nomeFantasia, $cnpj, $contato, $endereco) {
        $this->pw = $pw;
        $this->idEstabelecimento = $idEstabelecimento;
        $this->categoria = $categoria;
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
        $this->contato = $contato;
        $this->endereco = $endereco;
    }

    // Getters

    public function getPw() {
        return $this->pw;
    }

    public function getIdEstabelecimento() {
        return $this->idEstabelecimento;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getContato() {
        return $this->contato;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // Setters

    public function setPw($pw) {
        $this->pw = $pw;
    }
    public function setIdEstabelecimento($idEstabelecimento) {
        $this->idEstabelecimento = $idEstabelecimento;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    // Métodos 
    public function cadastrarEstabelecimento(Estabelecimento $estabelecimento){
        include_once '../dao/EstabelecimentoDao.php';
        $estabelecimento = new EstabelecimentoDao();
        $estabelecimento->cadastrarEstabelecimento($this);    
    }

    public function listarEstabelecimento() {
        include_once '../dao/EstabelecimentoDao.php';
        $estabelecimento = new EstabelecimentoDao();
        $estabelecimento->listarEstabelecimento();
        return $estabelecimento->listarEstabelecimento();  
    }

    public function resgataEstabelecimento($idEstabelecimento) {
        include_once '../dao/EstabelecimentoDao.php';
        $estabelecimento = new EstabelecimentoDao();
        return $estabelecimento->resgataEstabelecimento($idEstabelecimento);  
    }

    public function alterarEstabelecimento(Estabelecimento $estabelecimento){
        include_once '../dao/EstabelecimentoDao.php';
        $estabelecimento = new EstabelecimentoDao();
        $estabelecimento->alterarEstabelecimento($this);  
    }

    public function excluirEstabelecimento($idEstabelecimento){
        include_once '../dao/EstabelecimentoDao.php';
        $estabelecimento = new EstabelecimentoDao();
        $estabelecimento->excluirEstabelecimento($idEstabelecimento);  
    }





}
?>