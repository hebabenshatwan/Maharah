<?php
use maharah\Classes\IphoneProduct;
use maharah\Classes\Product;
use maharah\Classes\SamsungProduct;
include(__DIR__.'/maharah/autoload.php');
//include(__DIR__.'/Interfaces/ProductInterfaces.php');

//include(__DIR__.'/Traits/Logger.php');
//include(__DIR__.'/Classes/Product.php');
//include(__DIR__.'/Classes/IphoneProduct.php');
//include(__DIR__.'/Classes/SamsungProduct.php');





if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $quantity = $_POST['Quantity'];
    $phone = $_POST['phone'];
    
        
}
if($phone == 'iphone'){
    $product = new IphoneProduct ('iphone',6000,$quantity);
} else{
    $product = new SamsungProduct ('Samsung',4000, $quantity);
}
echo "<br>";
echo "Total cost: {$product->clculateTotalCost()}";
echo "<br>";
echo '----------------------------------------';
echo "<br>";
echo $product->displayInfo();
echo "<br>";


?>