<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require 'Controller/HomeController.php';
require 'Model/Customer.php';
require 'Model/CustomerLoader.php';

session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

$controller = new HomeController();

if (!isset($_GET['customer'])){
    $_GET['customer'] = 0;
}

if (!isset($_GET['product'])){
    $_GET['product'] = 0;
}

$controller -> render((int)$_GET['customer'], (int)$_GET['product']);
