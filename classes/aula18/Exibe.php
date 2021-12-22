<?php

class Exibe {
    public $pessoa;
    public $nome;
    
    public function __construct($nome) {
        $this->pessoa = new Pessoa(); // Composição
        $this->nome = $nome;
    }
    
    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
    
}
