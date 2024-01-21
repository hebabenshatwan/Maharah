<?php
namespace Maharah\Classes;
use PDO;
final class Database{
    protected $pdo;

    public function __construct()
    {
     $config= require __DIR__.'/../ config.php';
    $this->pdo = new pdo ('mysql:host=localhost; dbname=maharah',' root','');

    }
     public function getRecords($sql,$param)
     {
        $sth = $this->exec($sql,$param);
        return $sth->fetchAll(PDO::FETCH_ASSOC);

     }
     public function getRecord($sql,$param)
     {
        $sth = $this->exec($sql,$param);
        return $sth->fetch(PDO::FETCH_ASSOC);

     }
    
    

     private function exec(string $sql,array $param=[])
     {
        $sth = $this->pdo->prepare($sql);
        foreach($param as $key=>$value)
        {
            $sth->bindValue(':'.$key,$value);
        }
        $sth->execute();
        return  $sth;

     }

}
?>