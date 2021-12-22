<?php

class Veiculo {
	private $modelo;
	public $cor;
	public $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function Andar(){
		echo "<p>Andou</p>";
	}

	public function Parar(){
		echo "<p>Parou</p>";
	}

}
