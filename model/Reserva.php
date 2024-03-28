<?php

    class Reserva {

        private $idReserva;
        private $FK_idCliente;
        private $FK_idEstabelecimento;
        private $numConvidados;
        private $data;
        private $hora;
        private $ambiente;
        private $ocasiao;
        private $obs;
        
    // Construtor
    public function __construct($idReserva, $FK_idCliente, $FK_idEstabelecimento, $numConvidados, $data, $hora, $ambiente, $ocasiao, $obs) {
    $this->idReserva = $idReserva;
    $this->FK_idCliente = $FK_idCliente;
    $this->FK_idEstabelecimento = $FK_idEstabelecimento;
    $this->numConvidados = $numConvidados;
    $this->data = $data;
    $this->hora = $hora;
    $this->ambiente = $ambiente;
    $this->ocasiao = $ocasiao;
    $this->obs = $obs;
    }

    // Getters
    public function getIdReserva() {
        return $this->idReserva;
    }

    public function getFKIdCliente() {
        return $this->FK_idCliente;
    }

    public function getFKIdEstabelecimento() {
        return $this->FK_idEstabelecimento;
    }

    public function getNumConvidados() {
        return $this->numConvidados;
    }

    public function getData() {
        return $this->data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getAmbiente() {
        return $this->ambiente;
    }

    public function getOcasiao() {
        return $this->ocasiao;
    }

    public function getObs() {
        return $this->obs;
    }

    // Setters
    public function setIdReserva($idReserva) {
        $this->idReserva = $idReserva;
    }

    public function setFKIdCliente($FK_idCliente) {
        $this->FK_idCliente = $FK_idCliente;
    }

    public function setFKIdEstabelecimento($FK_idEstabelecimento) {
        $this->FK_idEstabelecimento = $FK_idEstabelecimento;
    }

    public function setNumConvidados($numConvidados) {
        $this->numConvidados = $numConvidados;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function setAmbiente($ambiente) {
        $this->ambiente = $ambiente;
    }

    public function setOcasiao($ocasiao) {
        $this->ocasiao = $ocasiao;
    }

    public function setObs($obs) {
        $this->obs = $obs;
    }
}
?>