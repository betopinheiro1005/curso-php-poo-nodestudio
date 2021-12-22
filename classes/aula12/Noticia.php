<?php

include_once 'classes/aula12/Crud.php';

class Noticia implements Crud{
    public function create(){
        echo "<p>Criando notícia</p>";
    }
    
    public function read(){
        echo "<p>Exibindo notícia</p>";
    }
    
    public function update($data){
        echo "<p>Atualizando notícia " . $data . "</p>";
    }

    public function delete(){
        echo "<p>Deletando notícia</p>";
    }
}
