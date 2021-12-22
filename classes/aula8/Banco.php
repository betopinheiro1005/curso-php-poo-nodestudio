<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

        function getSaldo() {
        return $this->saldo;
    }
    
    abstract protected function Sacar($valor);
    abstract protected function Depositar($valor);
}
