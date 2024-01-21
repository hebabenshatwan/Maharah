<?php
namespace maharah\Classes;
use maharah\Interfaces\ProductInterface;
use maharah\Traits\Logger;

class SamsungProduct extends Product implements ProductInterface{
   use Logger; 

   public function clculateTotalCost(){
   
      $this->log("The Total: {($this->price +50) *  $this->quantity}") ;
      return ($this->price +50) *  $this->quantity;
}

  public function displayInfo(){
   return "The Product Name is: {$this->name}, the Price is: {$this->price}, and the Quantity are:{$this->quantity}.";
}
}