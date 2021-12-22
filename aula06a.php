<?php

include_once 'classes/aula6a/Veiculo.php';

$veiculo = new Veiculo();
$veiculo->modelo = "Gol";
$veiculo->cor = "Vermelho";
$veiculo->ano = 2018;
echo "<p>Veículo modelo: " . $veiculo->modelo . "</p>";
echo "<p>Veículo cor: " . $veiculo->cor . "</p>";
echo "<p>Veículo ano: " . $veiculo->ano . "</p>";
var_dump($veiculo);


