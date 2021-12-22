<?php

include_once 'classes/aula9a/Pessoa.php';

class Rodrigo extends Pessoa {
    const nome = "Oliveira";
    
    public function exibirNome(){
        echo parent::nome; 
    }

}
