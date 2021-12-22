<?php

require_once("classes/aula2/Pessoa.php");

$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 25;
$rodrigo->Falar();
// var_dump($rodrigo);
echo "<p>$rodrigo->nome</p>";
echo "<p>$rodrigo->idade</p>";