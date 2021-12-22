<?php

include_once 'classes/aula3c/Login.php';

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<p>Email: " . $logar->getEmail() . "</p>";
echo "<p>Senha: " . $logar->getSenha() . "</p>";
