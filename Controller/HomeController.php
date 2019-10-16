<?php

declare(strict_types=1);
class HomeController //to connect all the files (model and view)
{
    public function render (int $customerId){

        $loader = new CustomerLoader();
        $customer = $loader-> loadbyId($customerId);
        $allCustomers = $loader->loadCustomers();

        require 'View/home.php';
    }
}