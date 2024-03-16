<?php

class MestreDeObras extends Servente
{
    function __construct($nome, $codigo, $salarioBase, $qtdeFuncionarios){
        parent::__construct($nome, $codigo, $salarioBase);
        $this->SetQtdeFuncionarios($qtdeFuncionarios);
        $this->ajusteSalario();
    }

    private $qtdeFuncionarios;

    function getQtdeFuncionarios(){
        return $this->qtdeFuncionarios;
    }

    function setQtdeFuncionarios($qtde){
        $this->qtdeFuncionarios = $qtde;
    }

    function ajusteSalario(){
        $qtde = $this->qtdeFuncionarios / 10;
        if(floor($qtde) > 0){
            $this->salarioBase = $this->salarioBase * (($qtde / 10) + 1 ) ;
        }
    }

    function infoFuncionario(){
        $str = parent::infoFuncionario();
        return $str . "Quantidade de Funcionários: " . $this->getQtdeFuncionarios();
    }
}

