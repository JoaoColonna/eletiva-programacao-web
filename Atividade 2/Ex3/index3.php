<?php

require_once("Telefone.php");
require_once("Fixo.php");
require_once("Celular.php");
require_once("PrePago.php");
require_once("PosPago.php");

$fixo = new Fixo(18, 991748565, 5);
echo "Calcula Fixo: <br>";
echo $fixo->calculaCusto(10) . "<br>";

$prePago = new PrePago(18, 981896547, 10, "Tim");
echo "Calcula PrePago: <br>";
echo $prePago->calculaCusto(5) . "<br>";

$posPago = new PosPago(18, 997895478, 15, "Vivo");
echo "Calcula PosPago: <br>";
echo $posPago->calculaCusto(30) . "<br>";