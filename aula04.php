<?php

include_once 'classes/aula4/Login.php';

$logar = new Login("teste@teste.com", "123456", "Rodrigo Oliveira");
$logar->Logar();
echo "<p>Email: " . $logar->getEmail() . "</p>";
echo "<p>Senha: " . $logar->getSenha() . "</p>";
echo "<p>Nome: " . $logar->getNome() . "</p>";