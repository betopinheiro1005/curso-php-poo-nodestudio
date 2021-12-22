<?php

include_once 'classes/aula6d/Veiculo.php';

class Carro extends Veiculo {

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function ligarLimpador(){
		echo "<p>Limpando o para-brisa</p>";
	}
}
