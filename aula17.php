<?php

include_once 'classes/aula17/Produtos.php';
include_once 'classes/aula17/Carrinho.php';

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->exibe();
