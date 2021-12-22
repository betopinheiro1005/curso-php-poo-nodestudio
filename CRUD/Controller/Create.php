<?php

require_once('../vendor/autoload.php');

use App\Model\Product;
use App\Model\ProductDao;

if(isset($_POST['name']) && isset($_POST['description'])){

  $name = $_POST['name'];
  $description = $_POST['description'];

  if($name != null && $description != null) {
    $product = new Product();

    $product->setName($name);
    $product->setDescription($description);

    $productDao = new ProductDao();
    $productDao->create($product);
  } else {
    echo "<h3 style='color: #f00;'>É necessário preencher todos os campos do formulário!</h3>";
    echo "<a href='../index.php'><button style='padding: 10px 20px;'>Produtos cadastrados</button></a>";
  }

}

?>