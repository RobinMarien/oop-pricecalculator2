<?php
declare(strict_types=1);

/*ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);*/

require 'Controller/HomeController.php';
require 'Model/Customer.php';
require 'Model/CustomerLoader.php';
require 'Model/Product.php';
require 'Model/ProductLoader.php';
require 'Model/Group.php';
require 'Model/GroupsLoader.php';
require 'Model/Discount.php';



$controller = new HomeController();

if (!isset($_GET['customer'])){
    $_GET['customer'] = 0;
}

if (!isset($_GET['product'])){
    $_GET['product'] = 0;
}

$controller -> render((int)$_GET['customer'], (int)$_GET['product']);

