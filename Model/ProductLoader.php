<?php
declare(strict_types=1);

class ProductLoader
{
    public function loadProducts(): array{
        $list = [];
        $json = json_decode(file_get_contents('Data/products.json'),true);
        foreach ($json AS $productJson) {
            $list[] = new Product($productJson['id'], $productJson['name'], $productJson['description'], $productJson['price']);
        }
        return $list;
    }

    public function loadProductById(int $productId) :? Product{
        $json = json_decode(file_get_contents('Data/products.json'), true);
        foreach ($json AS $productJson) {
            if ($productJson['id'] === $productId) {
                return new Product($productJson['id'], $productJson['name'], $productJson['description'], $productJson['price']);
            }
        }
        return null;
    }
}