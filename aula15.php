<?php

include_once 'classes/aula15/Newsletter.php';

$newsletter = new Newsletter();

try {
    $newsletter->cadastrarEmail("contato@");
} catch (Exception $exc) {
    echo "<p>Mensagem: " . $exc->getMessage() . "</p>";
    echo "<p>Código: " . $exc->getCode() . "</p>";
    echo "<p>Linha: " . $exc->getLine() . "</p>";
    echo "<p>Arquivo: " . $exc->getFile() . "</p>";
}
