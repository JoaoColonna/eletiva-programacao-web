<?php

abstract class Celular extends Telefone {
    
    protected $custoDoMinutoBase;
    protected $nomeOperadora;

    function __construct($ddd, $numero, $custoDoMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero);
        $this->setCustoDoMinutoBase($custoDoMinutoBase);
        $this->setNomeOperadora($nomeOperadora);
    }

    function getCustoDoMinutoBase() {
        return $this->custoDoMinutoBase;
    }

    function setCustoDoMinutoBase($custoDoMinutoBase) {
        $this->custoDoMinutoBase = $custoDoMinutoBase;
    }

    function getNomeOperadora() {
        return $this->nomeOperadora;
    }

    function setNomeOperadora($nomeOperadora) {
        $this->nomeOperadora = $nomeOperadora;
    }
}