<?php

class Servente extends Funcionario
{
    function __construct($nome, $codigo, $salarioBase){
        parent::__construct($nome, $codigo, $salarioBase);
        $this->ajusteSalario();
    }

    function ajusteSalario(){
        $this->salarioBase = $this->salarioBase * 1.05;
    }
}

