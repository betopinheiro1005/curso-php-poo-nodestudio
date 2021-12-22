<?php

include_once 'classes/aula10/Login.php';

Login::$user = "Admin";
Login::verificaLogin();

$login = new Login();
$login ->sairSistema();