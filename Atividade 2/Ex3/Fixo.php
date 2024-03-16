<?php

class Fixo extends Telefone {

    private $custoPorMinuto;

    function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->setCustoPorMinuto($custoPorMinuto);
    }

    function getCustoPorMinuto() {
        return $this->custoPorMinuto;
    }

    function setCustoPorMinuto($custoPorMinuto) {
        $this->custoPorMinuto = $custoPorMinuto;
    }

    function calculaCusto($tempoLigacao) {
        return $this->custoPorMinuto * $tempoLigacao;
    }
}