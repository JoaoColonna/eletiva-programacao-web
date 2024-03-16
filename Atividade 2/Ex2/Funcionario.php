<?php

class Funcionario
{
    function __construct($nome, $codigo, $salarioBase){
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salarioBase = $salarioBase;
    }

    protected $nome;
    protected $codigo;
    protected $salarioBase;

    function getNome(){
        return $this->nome;
    }

    function getCodigo(){
        return $this->codigo;
    }
    
    function getSalarioBase(){
        return $this->salarioBase;
    }

    function setSalarioBase($salarioBase){
        if($salarioBase > 0){
            $this->salarioBase = $salarioBase;
        } else {
            $this->salarioBase - 0;
        }
    }

    function getSalarioLiquido(){
        $inss = $this->salarioBase * 0.1;
        $ir = 0.0;
        if($this->salarioBase > 2000.0){
            $ir = ($this->salarioBase - 2000.0) * 0.12;
        }
        return ($this->salarioBase - $inss - $ir);
    }

    function infoFuncionario(){
        return "<br>" . get_class($this) . "<br>".
        "Funcionário Código: " . $this->getCodigo() . "<br>" .
        "Nome: " . $this->getNome() . " <br>" . 
        "Salario Base: " . $this->getSalarioBase() . "<br>" . 
        "Salario líquido " . $this->getSalarioLiquido() . "<br>" ;
    }

} 