<?php
include __DIR__ . '/classes/Store.php';

class Repart extends Store  {
    public $color
    public $taglia
    public $genre

    public function __construct($_product1, $_product2, $_product3, $_color,) {
        parent:: __construct($_product1, $_product2, $_product3);
        
        $this->color = $_color;
        
    }
}

