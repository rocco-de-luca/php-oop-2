<?php
include __DIR__ . '/Store.php';

class Department extends Store  {
    // proprietà
    public $genre;
    public $color;
    public $size;

    public function __construct($_product1, $_product2, $_product3, $color) {
        parent::__construct($_product1, $_product2, $_product3);
        $this->color = $color;
       
    }
}






