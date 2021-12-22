<?php

namespace App\Model;

use PDOException;

class ProductDao{

  public function create(Product $p){
    try{
      $sql = 'INSERT INTO products(name,description) VALUES (?,?)';//bind values
      $stmt = Connection::getConn()->prepare($sql);

      $stmt->bindValue(1,$p->getName());
      $stmt->bindValue(2,$p->getDescription());

      $stmt->execute();

      echo 'Produto Cadastrado com Sucesso!';

      header('Location: ../index.php');
    }catch(PDOException $error){
      echo $error->getMessage();
    }
  }

  public function read(){
    try{
      $sql = 'SELECT * FROM products';
      $stmt = Connection::getConn()->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0){
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);//retorna um array com todos os registros
        return $result;
      }else{
        return [];
      }

    }catch(PDOException $error){
      echo $error->getMessage();
    }

  }

  public function update(Product $p){
    try{
      $sql = 'UPDATE products SET name=?, description=? WHERE id=?';
      $stmt = Connection::getConn()->prepare($sql);
      $stmt->bindValue(1,$p->getName());
      $stmt->bindValue(2,$p->getDescription());
      $stmt->bindValue(3,$p->getId());

      $stmt->execute();

      header('Location: ../index.php');

    }catch(PDOException $error){
        echo $error->getMessage();
    }
  }

  public function delete($id){
    try{
      $sql = 'DELETE FROM products  WHERE id = ?';
      $stmt = Connection::getConn()->prepare($sql);
      $stmt->bindValue(1,$id->getId());

      $stmt->execute();

      header('Location: ../index.php');

    }catch(PDOException $error){
      echo $error->getMessage();
    }
  }
}