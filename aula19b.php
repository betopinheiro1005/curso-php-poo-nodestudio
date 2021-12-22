<?php

include_once 'classes/aula19b/Pessoa.php';

$pessoa = New Pessoa();
$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa->nome . "<br>";
echo $pessoa->idade . "<br>";
echo $pessoa->sexo . "<br>";

echo $pessoa . "<br>";

echo $pessoa();