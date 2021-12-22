<?php
require_once('../vendor/autoload.php');

use \App\Model\ProductDao;

$productDao = new ProductDao();
$productDao->read();