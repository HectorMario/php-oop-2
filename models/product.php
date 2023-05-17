<?php

class product {
    public $price;
    public $name;
    public $category;
    public $expiration_date;

    function __construct($_name, $_price, $_expiration_date, $_category)
    {
        $this->price = $_price;
        $this->name = $_name;
        $this->expiration_date = $_expiration_date;
        $this->category = $_category;
    }

    public function hola(){

    }
}
   