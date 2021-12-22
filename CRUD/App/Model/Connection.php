<?php

namespace App\Model;

//DAO - Data Acess Object
//self é usado para acessar membros estáticos.

class Connection{

	private static $instance;

	public static function getConn(){
		if(!isset(self::$instance)):
			self::$instance =
				new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','');
        endif;

        return self::$instance;
	}
}

