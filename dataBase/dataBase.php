<?php
require_once __DIR__ . "/../models/cibo.php";
require_once __DIR__ . "/../models/giochi.php";
$prodoti = [
    new cibo("hola", 54, "14/05/2014",  new category('cane', 14)),
    new giochi("hola", 54, new category('cane', 14), "rosso"),
];