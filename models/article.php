<?php 
require_once __DIR__ . "/product.php";

class article extends product {
    public $type;

    function __construct($_name, $_price, $_expiration_date, $_category, $_type)
    {
        parent::__construct($_name, $_price, $_expiration_date, $_category);
        $this->type = $_type;
    }
}

$istanza = new article("hola", 54, "14/05/2014", "cane", "cibo");
var_dump($istanza);