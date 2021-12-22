<?php

class Login {
    public static $user;
    
    public static function verificaLogin(){
        echo "<p>O usuário " . self::$user . " está logado</p>";
    }
    
    public function sairSistema(){
        echo "<p>O usuário deslogou!</p>";
    }
}
