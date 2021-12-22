<?php

include_once 'classes/aula3b/Login.php';

$logar = new Login();
$logar->email = "teste@teste.com";
$logar->senha = "1234567";
$logar->Logar();
