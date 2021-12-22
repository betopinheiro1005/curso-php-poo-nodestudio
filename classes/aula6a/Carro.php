<?php

include_once 'classes/aula6a/Veiculo.php';

class Carro extends Veiculo {
	public function ligarLimpador(){
		echo "<p>Limpando o para-brisa</p>";
	}
}
