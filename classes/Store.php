<?php
/**
 * class Store
 */

 class Store{
    public $product1;
    public $product2;
    public $product3;

    // constructor
   public function __construct($_product1, $_product2, $_product3) {
       $this->product1 = $_product1;
       $this->product2 = $_product2;
       $this->product3 = $_product3;

   }
 // methods
    
 public function getProduct(){
    return $this->product1 . ' ' . $this->product2 . ' ' . $this->product3;
    }
 }
     

       
 