<?php

class Login {
    private $email;
    private $senha;

    public function getEmail(){
    	return $this->email;
    }

    public function setEmail($email){
	$email_limpo = filter_var($email, FILTER_SANITIZE_EMAIL);
	$this->email = $email_limpo;
    }

    public function getSenha(){
	return $this->senha;
    }

    public function setSenha($senha){
	$this->senha = $senha;
    }

    public function Logar(){
	if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "<p>Logado com sucesso!</p>";
	else:
            echo "<p>Dados inválidos!</p>";
	endif;
    }
}
