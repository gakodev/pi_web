<?php

    class Cliente {

        private $idCliente;
        private $nome;
        private $cpf;
        private $dataNascimento;
        private $numCelular;
        private $email;
    
    // Construtor
    public function __construct($idCliente, $nome, $cpf, $dataNascimento, $numCelular, $email) {
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
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

    public function getDataNascimento() {
        return $this->dataNascimento;
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

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function setNumCelular($numCelular) {
        $this->numCelular = $numCelular;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Métodos 
    public function cadastrarCliente(Cliente $model){
        include_once '../dao/clienteDao.php';
        $model = new clienteDao();
        $model->cadastrarCliente($this);    
    }

    public function listarClientes() {
        include_once '../dao/clienteDao.php';
        $dao = new clienteDao();
        $dao->listarClientes();
        return $dao->listarClientes();  
    }

    public function resgataCliente($idCliente) {
        include_once '../dao/clienteDao.php';
        $model = new clienteDao();
        return $model->resgataCliente($idCliente);  
    }

    public function alterarCliente(Cliente $cliente){
        include_once '../dao/clienteDao.php';
        $cliente = new clienteDao();
        $cliente->alterarCliente($this);  
    }

    public function excluirCliente($idCliente){
        include_once '../dao/clienteDao.php';
        $model = new clienteDao();
        $model->excluirCliente($idCliente);  
    }





}









?>