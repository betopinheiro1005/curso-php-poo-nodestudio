<?php

class Newsletter {
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
           throw new Exception("Este email é inválido!", 1);
        else:
            echo "Email cadastrado com sucesso!";
        endif;
    }
}
