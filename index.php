<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'Controller/HomeController.php';
require 'Model/Customer.php';
require 'Model/CustomerLoader.php';

$controller = new HomeController();

if (!isset($_GET['customer'])){
    $_GET['customer'] = 0;
    $controller -> render((int)$_GET['customer']);
}
else{
    $controller -> render((int)$_GET['customer']);
}

