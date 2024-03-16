<?php

abstract class Telefone {

    protected $ddd;
    protected $numero;

    function __construct($ddd, $numero) {
        $this->setDDD($ddd);
        $this->setNumero($numero);
    }

    function getDDD() {
        return $this->ddd;
    }

    function setDDD($ddd) {
        $this->ddd = $ddd;
    }

    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    abstract function calculaCusto($tempoLigacao);
}