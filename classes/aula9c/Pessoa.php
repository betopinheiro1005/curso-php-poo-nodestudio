<?php

class Pessoa {
    const nome = "Rodrigo";
    
    public function exibirNome(){
        echo self::nome; 
    }
}
