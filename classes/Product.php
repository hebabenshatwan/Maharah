<?php
namespace maharah\Classes;
use maharah\Interfaces\ProductInterfaces;

abstract class Product{
     // Properties
     Public  $name;
     Public $price;
     Public $quantity;
     
     //methods

      public function __construct($name,$price,$quantity) {
        $this->name = $name;
        $this->price =$price;
         $this->quantity =$quantity;

         
    }
     


     
}


?>