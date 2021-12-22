<?php

require_once('../vendor/autoload.php');

use App\Model\Product;
use App\Model\ProductDao;

if(isset($_GET['id'])){
  $id = $_GET['id'];
}

$product = new Product();
$product->setId($id);

$productDao = new ProductDao();
$productDao->delete($product);