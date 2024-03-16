<?php 

require_once("Ponto.php");

$p = new Ponto(8, 18);
$p2 = new Ponto(20, 10);

echo $p->calculateDistanceWithObject($p2) . "<br>";
echo $p->calculateDistanceWithValues(50, 30) . "<br>";
echo Ponto::calculeDistanceWithSeveralValues(8, 18, 10, 20) . "<br>";
echo Ponto::$counter;