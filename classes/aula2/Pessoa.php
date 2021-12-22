<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
	echo "<p>". $this->nome . ", idade: ". $this->idade . " anos, acabou de falar!</p>";
    }
}
