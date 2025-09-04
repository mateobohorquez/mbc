<?php

require_once 'carro.php';

$carroespecial1 = new carro("amarillo","Audi","A5",800,200,5);
$carroespecial2 = new carro("rosa","ferrari","A5",800,200,5);
$carroespecial3 = new carro("verde","mercedes","A5",800,200,5);
$carroespecial4 = new carro("lila","renault","A5",800,200,5);

var_dump($carroespecial1);
var_dump($carroespecial2);
var_dump($carroespecial3);
var_dump($carroespecial4);