<?php


class Product
{
    private $id;
    private $name;
    private $description;
    private $price;
    public function __construct(int $_id, string $_name, string $_description, float $_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
    }
    public function getId () : int {
        return $this->id;
    }
    public function getName () : string {
        return $this->name;
    }
    public function getDescription () : string {
        return $this->description;
    }
    public function getPrice () : float {
        return $this->price;
    }
}