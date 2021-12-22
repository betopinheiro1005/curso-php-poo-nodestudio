<?php

include_once 'classes/aula16/Cliente.php';
include_once 'classes/aula16/Pedido.php';

$cliente = new Cliente();
$cliente->nome = "Rodrigo Oliveira";
$cliente->endereco = "Rua das Acácias, 58";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente; // Relacionamento

$dados = array(
    'numero_pedido' => $pedido->numero,
    'cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco,
);

// var_dump($dados);
print_r($dados);