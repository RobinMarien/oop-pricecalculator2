<?php
declare(strict_types=1);

class Customer
{
    private $id;
    private $name;
    private $group;


    public function __construct(int $_id, string $_name, int $_group)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->group = $_group;
    }

    public function getId() : int {
        return $this -> id;
    }

    public function getName() : string {
        return $this -> name;
    }

    public function getGroup() : int {
        return $this -> group;
    }

}