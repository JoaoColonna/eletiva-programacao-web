<?php

class PosPago extends Celular {
    
    function calculaCusto($tempoLigacao) {
        return ($this->custoDoMinutoBase * 0.90) * $tempoLigacao;
    }
}