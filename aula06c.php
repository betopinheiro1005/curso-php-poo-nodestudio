<?php

include_once 'classes/aula6c/Veiculo.php';

$veiculo = new Veiculo();
$veiculo->setModelo("Hilux");
echo "<p>Veículo modelo: " . $veiculo->getModelo() . "</p>";
var_dump($veiculo);


