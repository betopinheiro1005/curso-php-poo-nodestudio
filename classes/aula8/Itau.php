<?php

include_once 'classes/aula8/Banco.php';

class Itau extends Banco {

   public function Sacar($valor){
       $this->saldo -= $valor;
       echo "Sacou $valor <hr>";
   }
   
   public function Depositar($valor){
       $this->saldo += $valor; 
       echo "Depositou $valor <hr>";
   }

}
