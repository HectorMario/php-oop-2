<?php
require_once __DIR__ . "/category.php";
class product {
    public $price;
    public $name;
    public $category;

    function __construct($_name, $_price, category $_category)
    {
        $this->price = $_price;
        $this->name = $_name;
        $this->category = $_category;
    }

    public function hola(){
        
    }
}
   