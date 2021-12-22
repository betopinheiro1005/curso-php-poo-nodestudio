<?php

class Login {
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome){
		$this->email = $email;
		$this->senha = $senha;
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function Logar(){
		if ($this->email == "teste@teste.com" and $this->senha == "123456"):
			echo "<p>Logado com sucesso!</p>";
		else:
			echo "<p>Dados inválidos!</p>";
		endif;
	}
}
