<?php
require_once __DIR__ . "/product.php";
class giochi extends product{
    public $color;

    function __construct($_name, $_price, $_category, $_color)
    {
        parent::__construct($_name, $_price, $_category);
        $this->color = $_color;
    }
}