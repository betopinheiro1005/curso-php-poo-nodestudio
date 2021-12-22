<?php

include_once 'classes/aula3a/Login.php';

$logar = new Login();
$logar->email = "teste@teste.com";
$logar->senha = "123456";
$logar->Logar();
