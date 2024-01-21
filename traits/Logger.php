<?php
namespace maharah\Traits;
trait Logger
{
   public function log($message){
    file_put_contents(__DIR__.'/log.log',$message."\n",FILE_APPEND);
   }
}

?>