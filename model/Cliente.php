<?php

    class Cliente {

        private $idCliente;
        private $nome;
        private $cpf;
        private $datareservaNascimento;
        private $numCelular;
        private $email;
    
    // Construtor
    public function __construct($idCliente, $nome, $cpf, $datareservaNascimento, $numCelular, $email) {
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->datareservaNascimento = $datareservaNascimento;
        $this->numCelular = $numCelular;
        $this->email = $email;
    }

    // Getters
    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataReservaNascimento() {
        return $this->datareservaNascimento;
    }

    public function getNumCelular() {
        return $this->numCelular;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setDataReservaNascimento($datareservaNascimento) {
        $this->datareservaNascimento = $datareservaNascimento;
    }

    public function setNumCelular($numCelular) {
        $this->numCelular = $numCelular;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Métodos 
    public function cadastrarCliente(Cliente $dao){
        include_once '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        $dao->cadastrarCliente($this);    
    }

    public function listarClientes() {
        include_once '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        $dao->listarClientes();
        return $dao->listarClientes();  
    }

    public function resgataCliente($idCliente) {
        include_once '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        return $dao->resgataCliente($idCliente);  
    }

    public function alterarCliente(Cliente $dao){
        include_once '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        $dao->alterarCliente($this);  
    }

    public function excluirCliente($idCliente){
        include_once '../dao/ClienteDao.php';
        $dao = new ClienteDao();
        $dao->excluirCliente($idCliente);  
    }





}









?>