<?php

include_once 'classes/aula7d/Veiculo.php';

class Carro extends Veiculo {

    public function ligarLimpador(){
	echo "<p>Limpando o para-brisa</p>";
    }
        
    public function mostrarAcao(){
        $this->Andar();
    }
    
}
