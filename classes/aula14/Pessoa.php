<?php

class Pessoa {
    public $idade;
    
    public function __clone() {
        echo "<p>Clonagem de objetos</p>";
    }
}
