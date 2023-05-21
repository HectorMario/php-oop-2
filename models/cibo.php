<?php 
require_once __DIR__ . "/product.php";

class cibo extends product {
    public $dateExpired;

    function __construct($_name, $_price, $_expiration_date, $_category)
    {
        parent::__construct($_name, $_price, $_category);
        $this->dateExpired = $_expiration_date;
    }
}

