<?php
$user = "root";
$pass = "";
try{
$dbh = new PDO('mysql:host=localhost; dbname=maharah', $user,$pass);


} catch (PDOExeptio $e){
    echo "Error connecting to database:". $e->getmessage();
}

$sth = $dbh->prepare('SELECT * FROM `products`');
$sth->execute();
$rows = $sth->fetchAll(PDO::FETCH_ASSOC);

 print_r($rows);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
    
 </head>
 <body>
    <table>
        <th></th>
    </table>
 </body>
 </html>
 


