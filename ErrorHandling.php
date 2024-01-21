<?php
$dividend = 12;
$divisor =0;

 function divideNumbers($dividend,$divisor)
{
 
    if($divisor==0)
    {
        throw new Exception ("can not divide by zero!");

    }
    return   $dividend/$divisor;
}

try{
   echo $dividend/$divisor;
   
}
catch(Exception $ex)
{
  
    $ex->getMessage();
}

?>