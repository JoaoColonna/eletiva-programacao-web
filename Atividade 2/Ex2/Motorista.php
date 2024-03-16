<?php

class Motorista extends Funcionario
{
    function __construct($nome, $codigo, $salarioBase, $numCNH){
        parent::__construct($nome, $codigo, $salarioBase);
        $this->setNumCNH($numCNH);
    }
    private $numCNH;

    function getNumCNH(){
        return $this->numCNH;
    }

    function setNumCNH($num){
        $this->numCNH = $num;
    }

    function InfoFuncionario(){
        $str = parent::infoFuncionario();
        return $str . "Carteira Nacional de Habilitação (CNH): " . $this->getNumCNH() . "<br>" ;

    }
}

