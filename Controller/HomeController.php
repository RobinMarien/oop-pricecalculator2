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

        $loaderGroup= new GroupsLoader();
        $allGroups = $loaderGroup->loadGroups();
        $group = $loaderGroup->loadGroupById($customer->getGroup());
        require 'View/home.php';
    }
}