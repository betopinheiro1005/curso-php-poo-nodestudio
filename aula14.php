<?php

include_once 'classes/aula14/Pessoa.php';

$pessoa = new Pessoa;
$pessoa->idade = 25;

// $pessoa2 = $pessoa;
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
