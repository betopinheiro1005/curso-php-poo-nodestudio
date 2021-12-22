<?php

class Pessoa {
    private $nome;
    
    public function __set($nome, $valor) {
        $this->nome = $valor;
    }
    
    public function __get($nome){
        return $this->nome;
    }
    
}
