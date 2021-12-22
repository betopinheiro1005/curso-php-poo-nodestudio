<?php

include_once 'classes/aula5/Carro.php';
include_once 'classes/aula5/Moto.php';

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
$carro->ligarLimpador();
print_r($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
$moto->darGrau();
print_r($moto);
