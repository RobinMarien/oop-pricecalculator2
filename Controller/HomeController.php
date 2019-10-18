<?php

declare(strict_types=1);
class HomeController //to connect all the files (model and view)
{
    public function render (int $customerId, int $productId){

        $loaderCustomer = new CustomerLoader();
        $customer = $loaderCustomer-> loadbyId($customerId);
        $allCustomers = $loaderCustomer->loadCustomers();

        $loaderProduct= new ProductLoader();
        $product = $loaderProduct->loadProductById($productId);
        $allProducts = $loaderProduct->loadProducts();
        require 'View/home.php';
    }
}