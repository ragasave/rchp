<?php

/**
 * Request Class
 */
use \Collection\RequestCollection as RequestCollection;
 class Request extends RequestCollection 
 {

    public function __call($name,$arg){
      echo $name;
        
    }
    public static function __callStatic($name,$arg){
      echo $name;
   }
 }
 
?>