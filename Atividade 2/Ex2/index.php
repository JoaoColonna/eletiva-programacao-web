<?php
include_once("Funcionario.php");
include_once("Motorista.php");
include_once("Servente.php");
include_once("MestreDeObras.php");

$f = new Funcionario("Almir", 1, 1500);

echo $f->infoFuncionario();

$s = new Servente("Joaquim", 1, 2500);

echo $s->infoFuncionario();

$m = new Motorista("Motorista", 2, 3400, 534563431);

echo $m->infoFuncionario();

$mO = new MestreDeObras("Brabo", 3, 5000, 9);

echo $mO->infoFuncionario();