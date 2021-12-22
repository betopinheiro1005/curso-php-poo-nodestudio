<?php

require_once 'classes/aula13/classes/Produto.php';
require_once 'classes/aula13/models/Produto.php';

// use models\Produto;

use models\Produto as productModel;
use classes\Produto as productClass;


// $produto = new Produto();
$produto = new productModel();
$produto->mostrarDetalhes();

echo "<br>";

$produto2 = new productClass();
$produto2->mostrarDetalhes();
