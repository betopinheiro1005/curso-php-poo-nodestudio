<?php

include_once 'classes/aula6d/Carro.php';

$carro = new Carro();
$carro->setModelo("Hilux");
echo "<p>Carro modelo: " . $carro->getModelo() . "</p>";
var_dump($carro);


