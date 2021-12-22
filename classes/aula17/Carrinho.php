<?php

class Carrinho {
    public $produtos;
    
    // Agregação
    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }
    
    public function exibe(){
        foreach($this->produtos as $produto){
            echo "$produto->nome<br>";
            echo "$produto->valor<hr>";
        }
    }
}
