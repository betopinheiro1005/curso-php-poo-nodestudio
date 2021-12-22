<?php

class Veiculo {
    private $modelo;
    public $cor;
    public $ano;

//    private function Andar(){
//    	echo "<p>Andou</p>";
//    }

    protected function Andar(){
    	echo "<p>Andou</p>";
    }

    public function Parar(){
	echo "<p>Parou</p>";
    }

}
