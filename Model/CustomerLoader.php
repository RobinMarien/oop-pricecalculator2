<?php
declare(strict_types=1);

class CustomerLoader
{
    public function loadCustomers() : array {
        $list = [];
        $json = json_decode(file_get_contents('Data/customers.json'), true);
        foreach ($json AS $customerJson){
            $list[] = new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
        }
        return $list;
    }

    public function loadbyId (int $customerId) :? Customer {
        $json = json_decode(file_get_contents('Data/customers.json'), true);
        foreach ($json AS $customerJson){
            if ($customerJson['id'] === $customerId){
                return new Customer($customerJson['id'], $customerJson['name'], $customerJson['group_id']);
            }
        }
        return null;
    }
}