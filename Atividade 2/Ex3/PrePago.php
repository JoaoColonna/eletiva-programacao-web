<?php

class PrePago extends Celular {

    function calculaCusto($tempoLigacao) {
        return ($this->custoDoMinutoBase * 1.40) * $tempoLigacao;
    }
}